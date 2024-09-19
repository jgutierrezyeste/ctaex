/*actualizacion valores de las prestaciones_dependencias, prestacionesservicios, prestacionesserviciossubtipos*/
/*primero actualizamos las que tienen como prestacion_dependencias =1, que es una prestación de servicio*/
update dependencias set prestacion_dependencia_servicio_id = 1 where (dependenciaservicio_id=6 or dependenciaservicio_id=7) and prestaciondependencia_id=1;
update dependencias set prestacion_dependencia_servicio_id = 2 where dependenciaservicio_id=1 and (dependenciaserviciosubtipo_id=17 or dependenciaserviciosubtipo_id=5 or  dependenciaserviciosubtipo_id=6 or dependenciaserviciosubtipo_id=6 or dependenciaserviciosubtipo_id=10) and prestaciondependencia_id=1;
update dependencias set prestacion_dependencia_servicio_id= 3 where dependenciaservicio_id=3 and prestaciondependencia_id=1;
update dependencias set prestacion_dependencia_servicio_id =4 where dependenciaservicio_id=4 and prestaciondependencia_id=1;
update dependencias set prestacion_dependencia_servicio_id = 6 where dependenciaservicio_id = 1 and (dependenciaserviciosubtipo_id= 13 or dependenciaserviciosubtipo_id= 14 or dependenciaserviciosubtipo_id= 11 or dependenciaserviciosubtipo_id= 12) and prestaciondependencia_id =1;
update dependencias set prestacion_dependencia_servicio_id = 7 where dependenciaservicio_id =1 and( dependenciaserviciosubtipo_id =7 or dependenciaserviciosubtipo_id=9) and prestaciondependencia_id=1;
update dependencias set prestacion_dependencia_servicio_id=4 where dependenciaservicio_id=1 and dependenciaserviciosubtipo_id=3 and prestaciondependencia_id=1;

/* actualizamos ahora los que tienen prestacion_dependencia económica.*/
update dependencias set prestacion_dependencia_economica_id = 2 where prestaciondependencia_id=5 and dependenciaservicio_id=3 and dependenciaserviciosubtipo_id=18;
update dependencias set prestacion_dependencia_economica_id = 3 where prestaciondependencia_id=5 and dependenciaservicio_id=1 and (dependenciaserviciosubtipo_id=13 or dependenciaserviciosubtipo_id=17 or dependenciaserviciosubtipo_id=20 or dependenciaserviciosubtipo_id=5);
update dependencias set prestacion_dependencia_economica_id = 3 where prestaciondependencia_id=5 and dependenciaservicio_id=7 and (dependenciaserviciosubtipo_id=10 or dependenciaserviciosubtipo_id=6 );

/*actualizamos ahora los que tienen la prestacion_dependencia en valor nulo*/
update dependencias set prestacion_dependencia_servicio_id=6 where dependenciaservicio_id=1 and (dependenciaserviciosubtipo_id=14 or dependenciaserviciosubtipo_id=12) and prestaciondependencia_id is null;
update dependencias set prestacion_dependencia_servicio_id=1 where dependenciaservicio_id=1 and dependenciaserviciosubtipo_id=17  and prestaciondependencia_id is null;
update dependencias set prestacion_dependencia_servicio_id=3 where dependenciaservicio_id=3 and prestaciondependencia_id is null;
update dependencias set prestacion_dependencia_servicio_id=1 where dependenciaservicio_id=6 and dependenciaserviciosubtipo_id=1  and prestaciondependencia_id is null;

/*actualizamos ahora la prestaciondependencia_id que solo puede ser de servicio o económica*/
update dependencias set prestaciondependencia_id =2 where prestaciondependencia_id = 4 or prestaciondependencia_id = 5; 
