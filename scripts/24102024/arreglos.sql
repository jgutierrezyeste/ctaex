/*arreglos expedientes insertados dos veces*/

/*MARIA JOSEFA MOYA GARCIA-JOSEFA MOYA GARCIA
Actualizamos el id al que hace referencia el expediente_id, ya que tomaba el id de JOSEFA MOYA GARCIA, ahora tendra el de MARIA JOSEFA MOYA GARCIA*/
UPDATE defensas_judiciales set expediente_id=
(select ei.id from expedientes_intranet ei 
inner join expediente_datos_personales edp on ei.expediente_datos_personales_id=edp.id 
where nombre='MARIA JOSEFA' and apellido1='MOYA' and apellido2='GARCIA')
where num_expte='19/23';
/*ELIMINAMOS LA QUE SOBRA, la que tiene por nombre JOSEFA a secas*/
DELETE FROM historico_expediente where nombre='2/C/2023' and regimen_id='1' and tipo_regimen_id='1';
DELETE FROM expedientes_intranet where expediente_datos_personales_id=(select id from expediente_datos_personales where nombre='JOSEFA' and apellido1='MOYA' and apellido2='GARCIA');
DELETE FROM expediente_datos_personales where nombre='JOSEFA' and apellido1='MOYA' and apellido2='GARCIA';


/*MARIA DE LOS ANGELES GARCEA ESTEVEZ*/
/*ACTUALIZAMOS EL EXPEDIENTE_ID*/
UPDATE fallecidos set expediente_id=
(select ei.id from expedientes_intranet ei 
inner join expediente_datos_personales edp on ei.expediente_datos_personales_id=edp.id 
where nombre='MARIA ANGELES' and apellido1='GARCEO' and apellido2='ESTEVEZ')
where nombre='MARIA DE LOS ANGELES' and apellidos='GARCEO ESTEVEZ';

/*Actualizamos el nombre en fallecidos*/
UPDATE fallecidos set nombre='MARIA ANGELES' where nombre='MARIA DE LOS ANGELES' AND apellidos='GARCEO ESTEVEZ';

DELETE FROM expedientes_intranet where expediente_datos_personales_id=(select id from expediente_datos_personales where nombre='MARIA DE LOS ANGELES' and apellido1='GARCEO' and apellido2='ESTEVEZ');
DELETE FROM expediente_datos_personales where nombre='MARIA DE LOS ANGELES' and apellido1='GARCEO' and apellido2='ESTEVEZ';


