UPDATE `dependencia_servicios` SET `nombre` = 'PREVENCION Y PROMOCION DE LA AUTONOMIA PERSONAL' WHERE (`id` = '6');
UPDATE expedientes e set dependenciaservicio_id = (select id from dependencia_servicios ds where ds.nombre=e.servicio_dependencia); 
/*cambio a 0 o a 1 para la exportacion de datos a tipo boolean*/
update expedientes set activo_dp = 0 where activo_dp="FALSO" or activo_dp is null;
update expedientes set activo_dp =1 where activo_dp="VERDADERO";