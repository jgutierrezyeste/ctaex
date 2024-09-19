/*ACTUALIZAMOS VALORES DE TABLA PRESTACION_DEPENDENCIAS*/
UPDATE `prestacion_dependencias` SET `nombre` = 'PRESTACION ECONOMICA' WHERE (`id` = '2');
UPDATE `prestacion_dependencias` SET `nombre` = 'PRESTACION DE SERVICIOS' WHERE (`id` = '1');
DELETE FROM `prestacion_dependencias` WHERE (`id` > '2');


/*ACTUALIZAMOS VALORES DE TABLA PRESTACION_DEPENDENCIAS_SERVICIOS*/
UPDATE `prestacion_dependencias_servicios` SET `nombre` = 'SERVICIO DE PREVENCION DE LAS SITUACIONES DE DEPENDENCIA Y PROMOCION DE LA AUTONOMIA' WHERE (`id` = '1');
UPDATE `prestacion_dependencias_servicios` SET `nombre` = 'ATENCION RESIDENCIAL MAYORES' WHERE (`id` = '2');
UPDATE `prestacion_dependencias_servicios` SET `nombre` = 'CENTRO DE DIA/ OCUPACIONAL DISCAPACIDAD' WHERE (`id` = '4');
UPDATE `prestacion_dependencias_servicios` SET `nombre` = 'TELEASISTENCIA' WHERE (`id` = '5');
UPDATE `prestacion_dependencias_servicios` SET `nombre` = 'ATENCION RESIDENCIAL DISCAPACIDAD' WHERE (`id` = '6');
UPDATE `prestacion_dependencias_servicios` SET `nombre` = 'ATENCION RESIDENCIAL SALUD MENTAL' WHERE (`id` = '7');
DELETE FROM `prestacion_dependencias_servicios` WHERE (`id` > '7');

/*ACTUALIZAMOS VALORES DE TABLA PRESTACION_DEPENDENCIAS_ECONOMICAS*/
UPDATE `prestacion_dependencias_economicas` SET `nombre` = 'CUIDADOS EN EL ENTORNO FAMILIAR Y APOYO A CUIDADORES' WHERE (`id` = '1');
UPDATE `prestacion_dependencias_economicas` SET `nombre` = 'VINCULADA AL SERVICIO DE AYUDA A DOMICILIO' WHERE (`id` = '2');
UPDATE `prestacion_dependencias_economicas` SET `nombre` = 'VINCULADA AL SERVICIO DE ATENCION RESIDENCIAL' WHERE (`id` = '3');
UPDATE `prestacion_dependencias_economicas` SET `nombre` = 'ASISTENTE PERSONAL' WHERE (`id` = '4');
UPDATE `prestacion_dependencias_economicas` SET `nombre` = 'SERVICIOS COMPLEMENTARIOS: TELEASISTENCIA, CENTRO DE DIA...' WHERE (`id` = '5');
DELETE FROM `prestacion_dependencias_economicas` WHERE (`id` > '5');
