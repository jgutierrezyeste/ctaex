/*ELIMINACION DEL DUPLICADO DE EXPEDIENTE DE IDELFONSA DOLORES*/
DELETE FROM `fallecidos` WHERE (`id` = '83') and nombre='IDELFONSA DOLORES' and apellidos='MACIAS PERDIGON';
update fallecidos set nombre='IDELFONSA DOLORES' WHERE id=96 and apellidos='MACIAS PERDIGON';
delete from expedientes_intranet where id=797 and expte='124/T/2000';
delete from expediente_datos_personales where id=797 and nombre='IDELFONSA DOLORES';

/*ELIMINACION DUPLICADO DE MARIA LUISA MATEOS DELGADO*/
update fallecidos set expediente_id=1116 where apellidos='MATEOS DELGADO' AND nombre='MARIA LUISA';
update expedienTe_datos_personales set nombre='MARIA LUISA'where id=1115 and apellido1='MATEOS' AND apellido2='DELGADO';
update expedientes_intranet set fecha_fallecimiento_final='2017-04-27' where expediente_datos_personales_id=1115;
delete from expedientes_intranet where id=747 and  expte='002/2016';
delete from expediente_datos_personales where id=747 and nombre='MARIA LUISA';

/*ELIMINACION DUPLICADO DE ROSA GALAN MERINO*/
delete from fallecidos where id=396 and nombre='ROSA' and apellidos='GALAN MERINO';
update expedientes_intranet set fecha_fallecimiento_final='2021-04-07' where expediente_datos_personales_id=260;


/*ACTUALIZACION TABLA DEPENDENDENCIAS PARA PODER ELIMINAR OPCIONES REPETIDAS*/
update dependencias set dependenciaserviciosubtipo_id=9 where dependenciaserviciosubtipo_id=8;
update dependencias set dependenciaserviciosubtipo_id=20 where dependenciaserviciosubtipo_id=19;
/*lo actualizao tambien en expedientes_intranet porque sino no me deja eliminar las duplicadas, aunque en esta tabla vayan a eliminarse estos campos.*/
update expedientes_intranet set dependenciaserviciosubtipo_id=9 where dependenciaserviciosubtipo_id=8;
update expedientes_intranet set dependenciaserviciosubtipo_id=20 where dependenciaserviciosubtipo_id=19;


/*ACTUALIZACION NOMBRE TABLA DEPENDENCIAS_SERVICIOS_SUBTIPOS*/
delete from dependencia_servicio_subtipos where id=8 and nombre='PISO SUPERVISADO - PS';
delete from dependencia_servicio_subtipos where id=19 and nombre='VIVIENDA TUTELADA';
update dependencia_servicio_subtipos set nombre='CENTRO DE DIA CENTRO OCUPACIONAL' where nombre='C. D. CENTRO OCUPACIONAL';
update dependencia_servicio_subtipos set nombre='CENTRO DE DIA DISCAPACIDAD INTELECTUAL' where nombre='C. D. DISCAPACIDAD INTELECTUAL';
update dependencia_servicio_subtipos set nombre='CENTRO DE DIA DISCAPACIDAD INTELECTUAL' where nombre='C. D. GENERICO';
update dependencia_servicio_subtipos set nombre='SERVICIO DE AYUDA A DOMICILIO PARA NECESIDADES DEL HOGAR + ATENCION PERSONAL' where nombre='SAD. PARA NECESIDADES DEL HOGAR + ATENCION PERSONAL';

/*ACTUALIZACION FALLECIDOS, NOMBRES IGUALES QUE EN DATOS PERSONALES*/
update fallecidos set nombre='DIEGO MARIA' where nombre='DIEGO' and apellidos='HORMIGO SANABRIA';
update fallecidos set nombre='LUIS PEDRO' where nombre='LUIS' and apellidos='DE LA CAMARA AYALA';
update fallecidos set nombre='VICENTE DE PAUL' where nombre='VICENTE' and apellidos='SANCHEZ BLAZQUEZ';
update fallecidos set nombre='AMELIA VICENTA' where nombre='AMELIA' and apellidos='PARIENTE CORCHERO';
update fallecidos set nombre='MARIA ANTONIA' where nombre='ANTONIA' and apellidos='GRANADO CAPILLA';
update fallecidos set nombre='MARIA CABEZON TERESA' where nombre='MARIA TERESA CABEZON' and apellidos='PLASENCIA MAJADAS';
update fallecidos set nombre='MARIA DEL CARMEN' where nombre='MARIA CARMEN' and apellidos='RAMOS SANCHEZ';
update fallecidos set nombre='MARIA DE LOS ANGELES' where nombre='MARIA ANGELES' and apellidos='IGLESIAS SANCHO';
update fallecidos set nombre='ANGEL GONZALO' where nombre='ANGEL' and apellidos='MORENO GOMEZ';
update fallecidos set nombre='NICOLAS VICTORIANO' where nombre='VICTORIANO' and apellidos='RODRIGUEZ VENEGAS';
update fallecidos set apellidos='GARCIA DE PRUNEDA TREVIJANO' where nombre='FERNANDO' and apellidos='GARCIA PRUNEDA TREVIJANO';
update fallecidos set apellidos='MURILLO CUMBRES' where nombre='MODESTO' and apellidos='MURILLO CUMBES';



/*ACTUALIZACION EXPEDIENTE_ID DE LA TABLA FALLECIDOS*/
update fallecidos f set f.expediente_id=(select ei.id from expedientes_intranet ei inner join expediente_datos_personales edp on edp.id=ei.expediente_datos_personales_id 
where f.nombre=edp.nombre and (f.apellidos=CONCAT(edp.apellido1,' ', edp.apellido2)));