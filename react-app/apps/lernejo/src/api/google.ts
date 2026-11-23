// Client ID web du projet Google Cloud iKurso (#119) : destinataire des jetons d'identité, que le serveur vérifie
// ($GOOGLE_CLIENT_ID du config.php de prod). Il n'a rien de secret. EXPO_PUBLIC_GOOGLE_CLIENT_ID le remplace.
export const GOOGLE_KLIENTO =
  process.env.EXPO_PUBLIC_GOOGLE_CLIENT_ID || '885133585835-ere8db772u9oo64m8hscqv94296v3555.apps.googleusercontent.com'
