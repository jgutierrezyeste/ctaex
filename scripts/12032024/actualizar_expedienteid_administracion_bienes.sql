UPDATE `ctaex`.`administracion_bienes` SET `nombre` = 'MARIA DE LOS ANGELES' WHERE (`id` = '9');

UPDATE `ctaex`.`administracion_bienes` SET `apellidos` = 'REINA GONZALEZ', `nombre` = 'JUAN LUIS GUILLERMO' WHERE (`id` = '4');

UPDATE `ctaex`.`administracion_bienes` SET `apellidos` = 'REINA GOMEZ' WHERE (`id` = '4');

UPDATE administracion_bienes ab
SET ab.expediente_id = (SELECT e.id FROM expedientes e WHERE e.nombre = ab.nombre && e.apellido1 = ab.apellidos)