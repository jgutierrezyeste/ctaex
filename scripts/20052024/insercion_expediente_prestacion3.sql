INSERT INTO expediente_prestacion (expediente_id,prestacion_id,año_id,importe)values ('5',(select id from prestaciones p where p.nombre='PROTECCION FAMILIAR'),(select id from años a where a.nombre='2023'),'453,3');
INSERT INTO expediente_prestacion (expediente_id,prestacion_id,año_id,importe)values ('33',(select id from prestaciones p where p.nombre='ORFANDAD'),(select id from años a where a.nombre='2023'),'112,73');
INSERT INTO expediente_prestacion (expediente_id,prestacion_id,año_id,importe)values ('183',(select id from prestaciones p where p.nombre='PRESTACION ECCA. VINCULADA AL SERVICIO'),(select id from años a where a.nombre='2022'),'175');
INSERT INTO expediente_prestacion (expediente_id,prestacion_id,año_id,importe)values ('245',(select id from prestaciones p where p.nombre='ORFANDAD ABSOLUTA'),(select id from años a where a.nombre='2023'),'1050,19');
INSERT INTO expediente_prestacion (expediente_id,prestacion_id,año_id,importe)values ('339',(select id from prestaciones p where p.nombre='ECONOMICA VINCULADA AL SERVICIO'),(select id from años a where a.nombre='2023'),'210');
INSERT INTO expediente_prestacion (expediente_id,prestacion_id,año_id,importe)values ('369',(select id from prestaciones p where p.nombre='PRESTACION ECCA. VINCULADA AL SERVICIO'),(select id from años a where a.nombre='2023'),'124');
INSERT INTO expediente_prestacion (expediente_id,prestacion_id,año_id,importe)values ('387',(select id from prestaciones p where p.nombre='PROTECCION FAMILIAR'),(select id from años a where a.nombre='2023'),'453,3');
INSERT INTO expediente_prestacion (expediente_id,prestacion_id,año_id,importe)values ('407',(select id from prestaciones p where p.nombre='IMV'),(select id from años a where a.nombre='2023'),'162,45');
INSERT INTO expediente_prestacion (expediente_id,prestacion_id,año_id,importe)values ('504',(select id from prestaciones p where p.nombre='EXTRANJERO'),(select id from años a where a.nombre=NULL),NULL);

ALTER TABLE `expediente_prestacion` 
DROP COLUMN `año`;