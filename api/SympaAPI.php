<?php
// SympaAPI.php - Abonnement/désabonnement à la liste de diffusion Sympa
// espéranto-aktiv, via l'application de confiance "Ikurso" déclarée
// dans /etc/sympa/trusted_applications.conf sur servilo.
//
// $sympaSoapUrl (config.php) pointe vers 127.0.0.1:8000 : ce endpoint
// n'est joignable que depuis servilo lui-même (voir la restriction
// Require ip 127.0.0.1 dans le .htaccess du site esperanto-france.org).
// Comme SoapClient fixe lui-même l'en-tête Host d'après l'URL de
// connexion (donc "127.0.0.1:8000", ce qui ferait échouer le routage
// Apache vers le bon site), on sous-classe SoapClient pour reprendre la
// main sur la requête HTTP et forcer le bon Host.

// L'extension "soap" n'est pas forcément installee (ex. PHP 5.6 de la
// stack Docker locale d'ikurso) : on ne declare cette classe que si
// SoapClient existe reellement, sinon son "extends" ferait a lui seul
// planter le chargement du fichier en erreur fatale.
if (class_exists("SoapClient")) {
    class _SympaSoapTransport extends SoapClient {
        private $host;

        public function __construct($host, $options) {
            parent::__construct(null, $options);
            $this->host = $host;
        }

        public function __doRequest($request, $location, $action, $version, $one_way = 0) {
            $context = stream_context_create(array(
                "http" => array(
                    "method"        => "POST",
                    "header"        => "Content-Type: text/xml; charset=utf-8\r\n"
                                      . "SOAPAction: \"$action\"\r\n"
                                      . "Host: {$this->host}\r\n",
                    "content"       => $request,
                    "ignore_errors" => true,
                ),
            ));
            $response = @file_get_contents($location, false, $context);
            if ($response === false) {
                // Le endpoint n'est joignable que depuis servilo (voir la
                // restriction Require ip 127.0.0.1) : hors de ce serveur,
                // toute tentative echoue ici plutot que de laisser fuiter un
                // warning PHP brut ("failed to open stream: ...").
                throw new SoapFault("Client", "Sympa injoignable a $location (accessible uniquement depuis servilo)");
            }
            return $response;
        }
    }
}

class SympaAPI {
    const LISTE = "esperanto-aktiv";

    private $soapUrl;
    private $soapHost;
    private $appName;
    private $appPassword;

    public function __construct() {
        global $sympaSoapUrl, $sympaAppName, $sympaAppPassword;
        $this->soapUrl = $sympaSoapUrl;
        $this->soapHost = "esperanto-france.org";
        $this->appName = $sympaAppName;
        $this->appPassword = $sympaAppPassword;
    }

    // Abonne $email à la liste espéranto-aktiv. $gecos est le nom affiché
    // (facultatif). Retourne true si l'abonnement a réussi.
    public function subscribe($email, $gecos = "") {
        $result = $this->authenticateAndRun(
            "subscribe",
            array(self::LISTE, $gecos),
            $email
        );
        return (bool) $result;
    }

    // Désabonne $email de la liste espéranto-aktiv. Retourne true si le
    // désabonnement a réussi.
    public function unsubscribe($email) {
        $result = $this->authenticateAndRun(
            "signoff",
            array(self::LISTE),
            $email
        );
        return (bool) $result;
    }

    // Indique si $email est actuellement abonné à espéranto-aktiv.
    public function isMember($email) {
        $result = $this->authenticateAndRun(
            "amI",
            array(self::LISTE, "subscriber", $email)
        );
        return (bool) $result;
    }

    // Appelle authenticateRemoteAppAndRun côté Sympa : c'est le point
    // d'entrée SOAP unique pour une application de confiance. $userEmail,
    // quand fourni, est proxifié dans la variable USER_EMAIL (nécessaire
    // pour subscribe/signoff, qui agissent au nom de cet utilisateur ;
    // amI n'en a pas besoin puisque l'email visé est un paramètre direct).
    private function authenticateAndRun($service, $params, $userEmail = null) {
        if (!class_exists("SoapClient")) {
            error_log("SympaAPI: extension SOAP absente, appel '$service' ignore pour "
                . ($userEmail ?: implode(",", $params)));
            return false;
        }

        $vars = $userEmail !== null ? "USER_EMAIL=" . $userEmail : "";

        $client = new _SympaSoapTransport($this->soapHost, array(
            "location" => $this->soapUrl,
            "uri"      => "urn:sympasoap",
            "style"    => SOAP_RPC,
            "use"      => SOAP_ENCODED,
        ));

        try {
            return $client->__soapCall("authenticateRemoteAppAndRun", array(
                $this->appName,
                $this->appPassword,
                $vars,
                $service,
                $params,
            ));
        } catch (SoapFault $e) {
            error_log("SympaAPI: échec de l'appel '$service' pour "
                . ($userEmail ?: implode(",", $params)) . " : " . $e->getMessage());
            return false;
        }
    }
}
?>
