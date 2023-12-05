

update expedientes e set situacion_id=(select id from situacions where situacion=e.situacion);
update expedientes e set regimen_id=(select id from regimens where regimen=e.regimen);

update expedientes e set sexo_id=(select id from sexos where sexo=e.sexo);
update expedientes e set nacionalidad_id=(select id from nacionalidads where nacionalidad= e.nacionalidad);

update expedientes e set documentoidentificativo_id= (select id from documento_identificativos where tipo_documento=e.documento);

update expedientes e set sanitario_id=(select id from sanitarios where regimen_sanitario=e.otra_asistencia_sanitaria);
update expedientes e set patologiageneral_id=(select id from patologia_generals where patologia= e.patologia_general);
update expedientes e set centro_id=(select id from centros where nombre_centro= e.domicilio);
update expedientes e set declaracion_id =(select id from declaracions where proxima_declaracion=e.declaracion_anual)





