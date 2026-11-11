// Signature des versions de publication (Google Play, #1090) par la clé d'envoi, si elle est configurée.
// Le dossier android/ est régénéré par `expo prebuild` : ce plugin y remet la configuration à chaque fois.
// La clé et ses mots de passe restent hors du dépôt, dans ~/.gradle/gradle.properties :
//   IKURSO_UPLOAD_STORE_FILE, IKURSO_UPLOAD_KEY_ALIAS, IKURSO_UPLOAD_STORE_PASSWORD, IKURSO_UPLOAD_KEY_PASSWORD
// Sans eux, la version de publication reste signée par la clé de debug (APK pour les testeurs).
const { withAppBuildGradle } = require('expo/config-plugins')

const RELEASE = `
        release {
            if (project.hasProperty('IKURSO_UPLOAD_STORE_FILE')) {
                storeFile file(IKURSO_UPLOAD_STORE_FILE)
                storePassword IKURSO_UPLOAD_STORE_PASSWORD
                keyAlias IKURSO_UPLOAD_KEY_ALIAS
                keyPassword IKURSO_UPLOAD_KEY_PASSWORD
            }
        }`

module.exports = function withSubskribo(config) {
  return withAppBuildGradle(config, (c) => {
    let g = c.modResults.contents
    if (!g.includes('IKURSO_UPLOAD_STORE_FILE')) {
      // signingConfigs { debug { … } } : on ajoute release après le bloc debug
      g = g.replace(/(signingConfigs \{\s*debug \{[^}]*\})/, `$1${RELEASE}`)
      // buildTypes.release : la clé d'envoi si elle est configurée, sinon celle de debug
      g = g.replace(
        /(release \{\s*\/\/ Caution![^\n]*\n[^\n]*\n\s*)signingConfig signingConfigs\.debug/,
        "$1signingConfig project.hasProperty('IKURSO_UPLOAD_STORE_FILE') ? signingConfigs.release : signingConfigs.debug",
      )
    }
    c.modResults.contents = g
    return c
  })
}
