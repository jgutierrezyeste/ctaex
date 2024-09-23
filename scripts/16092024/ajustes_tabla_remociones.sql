/* ajustes tabla remociones*/
/*asignacion del campo expediente_id para poder eliminar la columna expte, nombre, apellidos*/
update remociones set expediente_id=(select ei.id from expedientes_intranet ei 
inner join expediente_datos_personales edp on edp.id=ei.expediente_datos_personales_id
where remociones.nombre=edp.nombre and remociones.apellidos=CONCAT(edp.apellido1,' ',edp.apellido2));

/*insercion de algunos expedientes en tabla expedientes para poder tener su id para poder terminar de rellenar la tabla, nos faltaban 4 expedientes que existen en remoción pero no en expedientes*/
INSERT INTO `prueba_ctaex`.`expediente_datos_personales` (`sexo_id`, `apellido1`, `apellido2`, `nombre`) VALUES ('2','APARICIO', 'GALLEGO', 'EVA MARIA');
INSERT INTO `prueba_ctaex`.`expediente_datos_personales` (`sexo_id`, `apellido1`, `apellido2`, `nombre`) VALUES ('2', 'CACERES', 'CABANILLAS', 'MARIA SOLEDAD');
INSERT INTO `prueba_ctaex`.`expediente_datos_personales` (`sexo_id`, `apellido1`, `apellido2`, `nombre`) VALUES ('2', 'ORTEGA', 'APARICIO', 'VANESA');
INSERT INTO `prueba_ctaex`.`expediente_datos_personales` (`sexo_id`, `apellido1`, `apellido2`, `nombre`) VALUES ('1', 'FERNANDEZ', 'SANCHEZ', 'MANUEL');

/*insercion de expedientes en tabla expedientes intranet*/
INSERT INTO expedientes_intranet (`expediente_datos_personales_id`,`num_expte_intranet`,`expte`,`fecha_alta`,`num_incapacidad`,`juzgado_id`)
values((select id from expediente_datos_personales where nombre='EVA MARIA' and apellido1='APARICIO' and apellido2='GALLEGO'),'33/2009','03/C/2010','2009-01-01','115/2009',(select id from juzgados where nombre ='1ª INSTANCIA Nº 3 DE DON BENITO'));
INSERT INTO expedientes_intranet (`expediente_datos_personales_id`,`num_expte_intranet`,`expte`,`fecha_alta`,`num_incapacidad`,`juzgado_id`)
values((select id from expediente_datos_personales where nombre='MARIA SOLEDAD' and apellido1='CACERES' and apellido2='CABANILLAS'),'20/2014','08/T/2014',NULL,'783/2013',(select id from juzgados where nombre ='1ª INSTANCIA Nº 4 DE BADAJOZ'));
INSERT INTO expedientes_intranet (`expediente_datos_personales_id`,`num_expte_intranet`,`expte`,`fecha_alta`,`num_incapacidad`,`juzgado_id`)
values((select id from expediente_datos_personales where nombre='VANESA' and apellido1='ORTEGA' and apellido2='APARICIO'),'47/2011','03/C/2012','2011-01-01','361/2011',(select id from juzgados where nombre ='1ª INSTANCIA Nº 2 DE ZAFRA'));
INSERT INTO expedientes_intranet (`expediente_datos_personales_id`,`num_expte_intranet`,`expte`,`fecha_alta`,`num_incapacidad`,`juzgado_id`)
values((select id from expediente_datos_personales where nombre='MANUEL' and apellido1='FERNANDEZ' and apellido2='SANCHEZ'),'54/2013','30/T/2013','2013-01-01','41/2013',(select id from juzgados where nombre ='1ª INSTANCIA Nº 2 DE DON BENITO'));

/*VOLVEMOS A ACTUALIZAR LOS EXPEDIENTES_ID DE LA TABLA REMOCIONES YA QUE TENEMOS YA LOS EXPEDIENTES QUE FALTABAN ALMACENADOS EN LA TABLA REMOCIONES */
update remociones set expediente_id=(select ei.id from expedientes_intranet ei 
inner join expediente_datos_personales edp on edp.id=ei.expediente_datos_personales_id
where remociones.nombre=edp.nombre and remociones.apellidos=CONCAT(edp.apellido1,' ',edp.apellido2));
