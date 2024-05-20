/*actualizacion numero de expediente de la tabla expedientes_intranet y de la tabla fallecidos por sus duplicidades*/
update expedientes_intranet set expte='04/T/2011' where id=983 and expte='04/T/2001';
update expedientes_intranet set expte='04/T/2001' where id=816 and expte='04/T/2000';
update fallecidos set expte='04/T/2011' where expediente_id=983;
update fallecidos set expte='04/T/2001' where expediente_id=816;

update expedientes_intranet set expte='20/T/1997' where id=145 and expte='05/T/1997';
update expedientes_intranet set expte='19/T/1997' where id=1016 and expte='05/T/1997';
update fallecidos set expte='20/T/1997' where  expediente_id=145 and expte='05/T/1997';
update fallecidos set expte='19/T/1997' where  expediente_id=1016 and expte='05/T/1997';

update expedientes_intranet set expte='06/T/2009' where id=1026 and expte='06/T/2019';
update fallecidos set expte='06/T/2009' where expediente_id=1026 and expte='06/T/2019';

update expedientes_intranet set expte='09/T/2002' where id=978 and expte='09/T/2001';
update fallecidos set expte='09/T/2002' where expediente_id=978 and expte='09/T/2001';

update expedientes_intranet set expte='16/T/2001' where id=738 and expte='16/T/2018';
update fallecidos set expte='16/T/2001' where expediente_id=738 and expte='16/T/2018';

update expedientes_intranet set expte='18/T/2004' where id=996 and expte='18/T/2014';
update fallecidos set expte='18/T/2004' where expediente_id=996 and expte='18/T/2014';

update expedientes_intranet set expte='27/T/2010' where id=1032 and expte='27/T/2019';
update fallecidos set expte='27/T/2010' where expediente_id=1032 and expte='27/T/2019';

update expedientes_intranet set expte='25/T/1998' where id=802 and expte='28/T/1998';
update fallecidos set expte='25/T/1998' where expediente_id=802 and expte='28/T/1998';

update expedientes_intranet set expte='04/C/2004' where id =35 and expte='02/C/2004';

update defensas_judiciales set expediente_id=614 where expediente_id=1149;
delete from expedientes_intranet where id=1149;
delete from expediente_datos_personales where id=1147;

/*pension repetida*/
delete from pensions where id=406;

UPDATE expedientes_intranet SET expte_antes_revison = '20/T/1997', expte_antiguo = '20/T/1997' WHERE (`id` = '145') and expte='20/T/1997';

/*pongo a null los expte_antes_revison que están repetidos de los que aparecen en pensiones y que tiene numero expte distinto. Se consulta a Maite los datos por si nos los puede facilitar*/
update expedientes_intranet set expte_antes_revison = NULL, expte_antiguo= NULL where id=702  and expte='84/T/2000';
update expedientes_intranet set expte_antes_revison = NULL, expte_antiguo= NULL where id=557 and expte='30/T/2009';
update expedientes_intranet set expte_antes_revison = NULL, expte_antiguo= NULL where id=246 and expte='10/C/2014';


/*ponemos a null todos los campos vacíos de la tabla pensiones*/
update pensions set año_prestacion=NULL WHERE año_prestacion =" ";
update pensions set año_prestacion2 =NULL where año_prestacion2=" ";
update pensions set año_prestacion3=NULL WHERE año_prestacion3=" ";
update pensions set prestacion=NULL WHERE prestacion= " ";
update pensions set prestacion2 =NULL where prestacion2=" ";
update pensions set prestacion3 = NULL where prestacion3=" ";
update pensions set importe=NULL where importe = '0' or importe = ' ';
update pensions set importe2=NULL where importe2 = '0' or importe2 = ' ';
update pensions set importe3=NULL where importe3 = '0' or importe3 = ' ';

/*acualizacion nombre de una de las prestaciones*/
UPDATE `prestaciones` SET `nombre` = 'PRESTACION ECCA. CUIDADOS ENTORNO FAMILIAR' WHERE (`id` = '30');


/*cambio tipo de dato de importe en expediente_prestacion*/
ALTER TABLE `expediente_prestacion` 
CHANGE COLUMN `importe` `importe` TEXT NULL DEFAULT NULL ;
