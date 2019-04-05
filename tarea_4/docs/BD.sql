CREATE TABLE  PERSONAS.USUARIO
(
IDENTIFICADOR INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
NOMBRE_COMPLETO VARCHAR(50) NOT NULL,
IDENTIFICACION VARCHAR(50) NOT NULL,
NACIONALIDAD VARCHAR(50) NOT NULL DEFAULT 'Costarricense',
PROVINCIA VARCHAR(50) NOT NULL,
CANTON VARCHAR(50) NOT NULL,
DISTRITO VARCHAR(50) NOT NULL,
DIRECCION VARCHAR(500) NOT NULL,
TELEFONO INT(8) NOT NULL,
CELULAR INT(8) NOT NULL,
CORREO_ELECTRONICO VARCHAR(225) NOT NULL,
GRADO_ACADEMICO TINYINT(1) UNSIGNED NOT NULL,
FECHA_NACIMIENTO DATE NOT NULL
);