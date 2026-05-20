/*actualizamos fecha_fallecimiento en la tabla de expediente_datos_perosnales, cogiendo las fechas de expedientes_intranet y 5 que nos faltaban de de fallecidos*/
update expediente_datos_personales edp set fecha_fallecimiento=(select fecha_fallecimiento_final from expedientes_intranet where expediente_datos_personales_id=edp.id);
update expediente_datos_personales edp set fecha_fallecimiento=(select fecha_defuncion from fallecidos f
inner join expedientes_intranet ei on ei.id= f.expediente_id where ei.expediente_datos_personales_id=edp.id) where edp.fecha_fallecimiento is null ;
/*hasta ahora tenemos 470 fallecidos*/

/*actualizamos fecha fallecimeinto de algunos expedientes cuyos datos los hemos obtenido de la base de datos de la intranet y que no disponiamos de ellos*/
update expediente_datos_personales set fecha_fallecimiento ='2002-04-14' where nombre='JOSE ANTONIO'and apellido1='BARRENO'and apellido2='CASTILLO';
update expediente_datos_personales set fecha_fallecimiento ='2003-02-15' where nombre='EUSEBIO'and apellido1='URBANO'and apellido2='GONZALEZ';
update expediente_datos_personales set fecha_fallecimiento ='2004-07-27' where nombre='JUAN'and apellido1='MANZANO'and apellido2='ESTRELLA';
update expediente_datos_personales set fecha_fallecimiento ='2004-08-10' where nombre='JOSE LUIS'and apellido1='MURILLO'and apellido2='PICO';
update expediente_datos_personales set fecha_fallecimiento ='2001-07-06' where nombre='JOSE'and apellido1='MARTIN'and apellido2='FLORES';
update expediente_datos_personales set fecha_fallecimiento ='2001-11-24' where nombre='JUANA'and apellido1='FACENDA'and apellido2='RIPADO';
update expediente_datos_personales set fecha_fallecimiento ='2004-03-28' where nombre='FERNANDO'and apellido1='BOHOYO'and apellido2='PINO';
update expediente_datos_personales set fecha_fallecimiento ='2002-08-13' where nombre='GLORIA'and apellido1='GUIJO'and apellido2='SANCHEZ';
update expediente_datos_personales set fecha_fallecimiento ='2001-06-05' where nombre='MAXIMINA'and apellido1='MARTIN'and apellido2='MARTIN';
update expediente_datos_personales set fecha_fallecimiento ='2001-12-19' where nombre='CRESCENCIA'and apellido1='BERMEJO'and apellido2='PEREZ';
update expediente_datos_personales set fecha_fallecimiento ='2000-01-03' where nombre='LUIS'and apellido1='PEDRAZA'and apellido2='LOPEZ';
update expediente_datos_personales set fecha_fallecimiento ='2004-06-12' where nombre='ANDRES'and apellido1='SALGADO'and apellido2='CANALES';
update expediente_datos_personales set fecha_fallecimiento ='2002-03-01' where nombre='MIGUEL'and apellido1='CACERES'and apellido2='AMADO';
update expediente_datos_personales set fecha_fallecimiento ='2004-05-16' where nombre='PEDRO'and apellido1='SOLIS'and apellido2='COSTA';
update expediente_datos_personales set fecha_fallecimiento ='2003-08-06' where nombre='LORENZO'and apellido1='PEREZ'and apellido2='MERINO';
update expediente_datos_personales set fecha_fallecimiento ='2004-02-14' where nombre='JULIA'and apellido1='LORENZO'and apellido2='DE LA CRUZ';
update expediente_datos_personales set fecha_fallecimiento ='2002-12-20' where nombre='FAUSTINA'and apellido1='RAMIREZ'and apellido2='GONZALEZ';
update expediente_datos_personales set fecha_fallecimiento ='2002-02-12' where nombre='CONSTANTINA'and apellido1='HERNANDEZ'and apellido2='GARCIA';
update expediente_datos_personales set fecha_fallecimiento ='2000-05-19' where nombre='ANTONIA'and apellido1='BELLIDO'and apellido2='GATA';
update expediente_datos_personales set fecha_fallecimiento ='2004-07-05' where nombre='FRANCISCO'and apellido1='LAZARO'and apellido2='MAESTRE';

/*ACTUALIZAMOS CAMPO IS_FALLECIDO*/
update expediente_datos_personales set is_fallecido=1 where fecha_fallecimiento is not null;

