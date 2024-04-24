/*actualizacion campos is revisable en tabla expedeintes para exportacion a excell para volcado a tabla discapacidades.*/
update expedientes set revisable_definitiva = "" where revisable_definitiva=1;
update expedientes set revisable_definitiva= 1 where revisable_definitiva=2;
update expedientes set revisable_definitiva= 0 where revisable_definitiva=3;
UPDATE `expedientes` SET `revisable_definitiva` = '0' WHERE (`id` = '146') and (`nombre`='FERNANDO') and (`apellido1`='MARTINEZ MARTIN');
UPDATE `expedientes` SET `revisable_definitiva` = '0' WHERE (`id` = '195') and (`nombre`='JOSE MARIA') and (`apellido1`='SANTANTON GOMEZ');
UPDATE `expedientes` SET `revisable_definitiva` = '0' WHERE (`id` = '261') and (`nombre`='MARIA') and (`apellido1`='BAEZ SORIANO');
UPDATE `expedientes` SET `revisable_definitiva` = '0' WHERE (`id` = '600') and (`nombre`='MARIA JOSE') and (`apellido1`='PECERO ORTIZ');
UPDATE `expedientes` SET `revisable_definitiva` = '0' WHERE (`id` = '178') and (`nombre`='PALOMA') and (`apellido1`='RODRIGUEZ JIMENEZ');
UPDATE `expedientes` SET `revisable_definitiva` = '0' WHERE (`id` = '237') and (`nombre`='JOSE') and (`apellido1`='RIVERA RAMOS');
UPDATE `expedientes` SET `grado_discapacidad` = '65' WHERE (`id` = '626') and (`nombre`='SATURNINO MIGUEL') and (`apellido1`='SALGADO JIMENEZ');
update expedientes set revisable_definitiva = null where revisable_definitiva="";
update expedientes set grado_discapacidad =null where grado_discapacidad="";
UPDATE `expedientes` SET `fecha_discapacidad` = '2005-05-20', `fecha_valor_discapacidad` = '2012-03-29' WHERE (`nombre` = 'PALOMA') and (`apellido1`='RODRIGUEZ JIMENEZ');
UPDATE `expedientes` SET `fecha_discapacidad` = '1996-04-25', `fecha_valor_discapacidad` = '1996-04-11' WHERE (`nombre` = 'JOSE') and (`apellido1`='RIVERA RAMOS');
UPDATE `expedientes` SET `fecha_discapacidad` = '2005-11-07', `fecha_valor_discapacidad` = '2005-11-04' WHERE (`nombre` = 'ALFONSO') and (`apellido1`='MARIN DE CACERES');
