INSERT INTO `expediente_datos_personales` (`sexo_id`, `apellido1`, `apellido2`, `nombre`) VALUES ('1', 'FERNANDEZ', 'SANCHEZ', 'MANUEL');

/*insercion de expedientes en tabla expedientes intranet*/
INSERT INTO expedientes_intranet (`expediente_datos_personales_id`,`num_expte_intranet`,`expte`,`fecha_alta`,`num_incapacidad`,`juzgado_id`)
values((select id from expediente_datos_personales where nombre='EVA MARIA' and apellido1='APARICIO' and apellido2='GALLEGO'),'33/2009','03/C/2010','2009-01-01','115/2009',(select id from juzgados where nombre ='1ª INSTANCIA Nº 3 DE DON BENITO'));