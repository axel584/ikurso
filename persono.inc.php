<? 
class persono
{
var $id;
var $enirnomo;
var $pasvorto;
var $retadreso,ekdato,lingvo
var $sekso;
var $familinomo;
var $personnomo;
var $adreso1;
var $adreso2;
var $posxtkodo;
var $urbo
var $lando;
var $ndtago;
var $ndmonato;
var $ndjaro;
var $kialo;
var $maksimumo;
var $kurso;

    function persono($v_enirnomo,$v_pasvorto,$v_retadreso,$v_lingvo)
    {
        this.setEnirnomo($v_enirnomo);
        this.setPasvorto($v_pasvorto);
        this.setRetadreso($v_retadreso);
        this.setLingvo($v_lingvo);
    }

    function persono() {
        // cxi tie estas por krei malprenan personon kaj poste preni gxin en la datumbazo
    }

    function setEnirnomo($v_enirnomo) {
        $enirnomo=$v_enirnomo;
    }


}


?>                    
                    