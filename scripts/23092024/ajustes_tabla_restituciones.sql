/*asignacion del campo expediente_id para poder eliminar la columna expte, nombre, apellidos*/
update restituciones set expediente_id=(select ei.id from expedientes_intranet ei 
inner join expediente_datos_personales edp on edp.id=ei.expediente_datos_personales_id
where restituciones.nombre=edp.nombre and restituciones.apellidos=CONCAT(edp.apellido1,' ',edp.apellido2));
/*insercion de algunos expedientes en tabla expedientes para poder tener su id para poder terminar de rellenar la tabla, nos faltaba 1 expediente que existen en remoción pero no en expedientes*/
INSERT INTO `expediente_datos_personales` (`sexo_id`, `apellido1`, `apellido2`, `nombre`) VALUES ('1','GONZALEZ', 'VICENTE', 'JUAN MANUEL');
/*insercion de expedientes en tabla expedientes intranet*/
INSERT INTO expedientes_intranet (`expediente_datos_personales_id`,`num_expte_intranet`,`expte`,`fecha_alta`,`num_incapacidad`,`juzgado_id`)
values((select id from expediente_datos_personales where nombre='JUAN MANUEL' and apellido1='GONZALEZ' and apellido2='VICENTE'),'46/2014','34/T/2014','2014-01-01','361/2013',(select id from juzgados where nombre ='1ª INSTANCIA Nº 1 DE TRUJILLO'));
/*VOLVEMOS A ACTUALIZAR LOS EXPEDIENTES_ID DE LA TABLA REMOCIONES YA QUE TENEMOS YA LOS EXPEDIENTES QUE FALTABAN ALMACENADOS EN LA TABLA RESTITUCIONES */
update restituciones set expediente_id=(select ei.id from expedientes_intranet ei 
inner join expediente_datos_personales edp on edp.id=ei.expediente_datos_personales_id
where restituciones.nombre=edp.nombre and restituciones.apellidos=CONCAT(edp.apellido1,' ',edp.apellido2));
