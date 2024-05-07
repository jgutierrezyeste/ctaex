/*eliminacion de espacios*/
update expediente_datos_personales set apellido1= rtrim(apellido1) where id>0;
update expediente_datos_personales set apellido2=ltrim(apellido2) where id>0;

/*actualizacin numero_documento a null para los resultados  vacios*/
update expediente_datos_personales set numero_documento = NULL where numero_documento ='';

/*actualizaicon seg_social a null para los datos vacios*/
update expediente_datos_personales set seg_social = NULL where seg_social ='';

/*actualizaicon numero_seguro_medico a null para los datos vacios*/
update expediente_datos_personales set numero_seguro_medico = NULL where numero_seguro_medico ='';

/*actualizaicon poliza a null para los resultados vacios*/
update expediente_datos_personales set poliza = NULL where poliza ='';
/*actualizaicon carpeta a null para los resultados vacios*/
update expediente_datos_personales set carpeta = NULL where carpeta ='';

/*actualizacion documento_identificativo_id, poniendole el correspondiente a los que tienen dni*/
update expediente_datos_personales set documento_identificativo_id= 5 where (documento_identificativo_id is null or documento_identificativo_id ='') and (numero_documento is not null and numero_documento !=''); 

/*colocacion de campos con _id delante en la tabla*/
alter table expediente_datos_personales modify column sexo_id bigint(20) unsigned after id;
alter table expediente_datos_personales modify column nacionalidad_id bigint(20) unsigned after sexo_id;
alter table expediente_datos_personales modify column documento_identificativo_id bigint(20) unsigned after nacionalidad_id;
alter table expediente_datos_personales modify column seguro_medico_id bigint(20) unsigned after documento_identificativo_id;
alter table expediente_datos_personales modify column centro_id bigint(20) unsigned after seguro_medico_id;
alter table expediente_datos_personales modify column domicilio_id bigint(20) unsigned after centro_id;
alter table expediente_datos_personales modify column aseguradora_id bigint(20) unsigned after domicilio_id;





