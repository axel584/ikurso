-- Application mobile (#1088) : refresh tokens. L'app reçoit à la connexion un access token (JWT) de 15 minutes
-- et un refresh token de 60 jours, qui lui donne un nouvel access token sans redemander le mot de passe.
-- Seule l'empreinte SHA-256 du refresh token est gardée en base. Chaque utilisation le remplace par un nouveau
-- (rotation) ; la déconnexion le révoque.
SET NAMES utf8mb4;

CREATE TABLE IF NOT EXISTS renovigaj_sxlosiloj (
  id INT NOT NULL AUTO_INCREMENT,
  persono_id INT NOT NULL,
  hakajxo CHAR(64) NOT NULL,
  kreita DATETIME NOT NULL,
  eksvalidigxo DATETIME NOT NULL,
  uzita DATETIME NULL,
  revokita DATETIME NULL,
  PRIMARY KEY (id),
  UNIQUE KEY hakajxo (hakajxo),
  KEY persono_id (persono_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
