

update expedientes e set situacion_id=(select id from situacions where situacion=e.situacion);
update expedientes e set regimen_id=(select id from regimens where regimen=e.regimen);

update expedientes e set sexo_id=(select id from sexos where sexo=e.sexo);
update expedientes e set nacionalidad_id=(select id from nacionalidads where nacionalidad= e.nacionalidad);

update expedientes e set documentoidentificativo_id= (select id from documento_identificativos where tipo_documento=e.documento);

update expedientes e set sanitario_id=(select id from sanitarios where regimen_sanitario=e.otra_asistencia_sanitaria);
update expedientes e set patologiageneral_id=(select id from patologia_generals where patologia= e.patologia_general);
update expedientes e set centro_id=(select id from centros where nombre_centro= e.domicilio);
update expedientes e set declaracion_id =(select id from declaracions where proxima_declaracion=e.declaracion_anual);

update expedientes e set aseguradora_id=(select id from aseguradoras where aseguradora=e.compañia);
update expedientes e set gradodependencia_id=(select id from grado_dependencias where grado=e.grado_dependencia);
update expedientes e set dependenciaservicio_id=(select id from dependencia_servicios where servicio=e.servicio_dependencia);
update expedientes e set dependenciaserviciosubtipo_id=(select id from dependencia_servicio_subtipos where servicio_subtipo=e.subtipo_servicio);
update expedientes e set prestaciondependencia_id=(select id from prestacion_dependencias where prestacion_dependencia=e.prestacion_dependencia);
update expedientes e set niveldependencia_id=(select id from nivel_dependencias where nivel=e.nivel_dependencia);
update expedientes e set procedimientojudicial_id=(select id from procedimiento_judicials where codificacion=e.procedimiento_judicial);

update judiciales_defensas jd set letrado_id=(select id from letrados where letrado=jd.letrado);
update judiciales_defensas jd set juzgado_id=(select id from juzgados where juzgado=jd.juzgado);
update judiciales_defensas jd set motivo_id=(select id from motivos where motivo=jd.motivo);


update expedientes e set patologia_id=(select id from patologias where patologia=e.patologia_concreta);


update administracion_biens ab set motivo_id=(select id from motivos where motivo=ab.motivo);

update administracion_biens ab set expediente_id=(select id from expedientes where expte=ab.expte);
update reintegros r set juzgado_id=(select id from juzgados where juzgado=r.juzgado);
update reintegros r set regimen_id=(select id from regimens where regimen=r.regimen);
update reintegros r set figura_id=(select id from figuras where figura=r.figura);
update reintegros r set año_id=(select id from años where año=r.año);

update expedientes e set residencia_id=(select id from residencias where expte=e.expte and nombre=e.nombre);

update expedientes e set juzgado_id=(select id from juzgados where juzgado=e.juzgado);