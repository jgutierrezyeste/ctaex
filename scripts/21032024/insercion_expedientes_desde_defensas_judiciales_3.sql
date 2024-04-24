UPDATE `defensas_judiciales` SET `nombre` = 'JOSE' WHERE (`apellidos` = 'REMEDIOS CASATEJADAS');
UPDATE `defensas_judiciales` SET `apellidos` = 'REYES RODRIGUEZ' WHERE (`nombre` = 'PEDRO' and num_expte='41/14');
UPDATE `defensas_judiciales` SET `apellidos` = 'BARBERO SANCHEZ' WHERE (`nombre` = 'CONCEPCION' and num_expte='45/15');
UPDATE `defensas_judiciales` SET `nombre` = 'FELIX' WHERE (`apellidos` = 'GUARDABRAZOS PEREZ');
UPDATE `defensas_judiciales` SET `nombre` = 'JOAQUIN JOSE' WHERE (`apellidos` = 'EXPOSITO VERDION');
UPDATE `defensas_judiciales` SET `apellidos` = 'ROSCO AVALOS' WHERE (`nombre` = 'ANA MARIA' and num_expte='66/19');
UPDATE `defensas_judiciales` SET `nombre` = 'JOSE MARIA' WHERE (`apellidos` = 'ESCOBAR MACIAS' and num_expte='80/09');
UPDATE `defensas_judiciales` SET `apellidos` = 'BARNETO ALVAREZ' WHERE (`nombre` = 'MARIA PIEDAD' and num_expte='83/23');
UPDATE `defensas_judiciales` SET `apellidos` = 'ESTEVEZ DE FELIPE' WHERE (`nombre` = 'DAVID' and num_expte='06/21');
UPDATE `defensas_judiciales` SET `nombre` = 'ANTONIO' WHERE (`apellidos` = 'PAREDES HERNANDEZ' and num_expte='15/19');
UPDATE `defensas_judiciales` SET `apellidos` = 'REMEDIOS CASATEJADA' WHERE (`nombre` = 'JOSE' and num_expte='30/19');
UPDATE `defensas_judiciales` SET `apellidos` = 'SANTOS GARCIA PUENTE' WHERE (`nombre` = 'ENRIQUE' and num_expte='36/22');
UPDATE `defensas_judiciales` SET `apellidos` = 'ARTENIEVA GRIGORIAN' WHERE (`nombre` = 'EDITA' and num_expte='09/17');
UPDATE `defensas_judiciales` SET `apellidos` = 'GALINDO ACEVEDO' WHERE (`nombre` = 'SACRAMENTO' and num_expte='13/18');
UPDATE `defensas_judiciales` SET `apellidos` = 'GARCIA FERNANDEZ' WHERE (`nombre` = 'JOSEFA' and num_expte='28/13');
UPDATE `defensas_judiciales` SET `apellidos` = 'CONTRERAS PEÑAS' WHERE (`nombre` = 'MARIA LUISA' and num_expte='35/10');
UPDATE `defensas_judiciales` SET `apellidos` = 'RODRIGUEZ MARTIN' WHERE (`nombre` = 'MANUEL' and num_expte='52/18');


update defensas_judiciales dj set expediente_id =(select id from expedientes e where e.nombre=dj.nombre and e.apellido1=dj.apellidos);
INSERT INTO expedientes (expte,observaciones,sexo_id,apellido1,nombre,regimen)values ('','Este expediente fue eliminado en su momento por el personal de CTAEX. Ha sido rescatado por Fotex tras la reestructuración de la BD por estar presente en tablas auxiliares.',2,'GARCIA PODEROSO','MARIA JUSTA','DEFENSA JUDICIAL');
INSERT INTO expedientes (expte,observaciones,sexo_id,apellido1,nombre,regimen)values ('41/T/2009','Este expediente fue eliminado en su momento por el personal de CTAEX. Ha sido rescatado por Fotex tras la reestructuración de la BD por estar presente en tablas auxiliares.',2,'MUÑOZ VICTORERO','HORTENSIA','DEFENSA JUDICIAL');
INSERT INTO expedientes (expte,observaciones,sexo_id,apellido1,nombre,regimen)values ('','Este expediente fue eliminado en su momento por el personal de CTAEX. Ha sido rescatado por Fotex tras la reestructuración de la BD por estar presente en tablas auxiliares.',2,'BUENO ALBA','ELENA CONCEPCION','DEFENSA JUDICIAL');
INSERT INTO expedientes (expte,observaciones,sexo_id,apellido1,nombre,regimen)values ('','Este expediente fue eliminado en su momento por el personal de CTAEX. Ha sido rescatado por Fotex tras la reestructuración de la BD por estar presente en tablas auxiliares.',1,'REYES RODRIGUEZ','PEDRO','DEFENSA JUDICIAL');
INSERT INTO expedientes (expte,observaciones,sexo_id,apellido1,nombre,regimen)values ('','Este expediente fue eliminado en su momento por el personal de CTAEX. Ha sido rescatado por Fotex tras la reestructuración de la BD por estar presente en tablas auxiliares.',2,'ROMERO MACHADO','MARIA CARMEN','DEFENSA JUDICIAL');
INSERT INTO expedientes (expte,observaciones,sexo_id,apellido1,nombre,regimen)values ('','Este expediente fue eliminado en su momento por el personal de CTAEX. Ha sido rescatado por Fotex tras la reestructuración de la BD por estar presente en tablas auxiliares.',1,'GUARDABRAZOS PEREZ','FELIX','DEFENSA JUDICIAL');
INSERT INTO expedientes (expte,observaciones,sexo_id,apellido1,nombre,regimen)values ('','Este expediente fue eliminado en su momento por el personal de CTAEX. Ha sido rescatado por Fotex tras la reestructuración de la BD por estar presente en tablas auxiliares.',2,'BARNETO ALVAREZ','MARIA PIEDAD','DEFENSA JUDICIAL');
update defensas_judiciales dj set expediente_id =(select id from expedientes e where e.nombre=dj.nombre and e.apellido1=dj.apellidos);

/*ultimas inserciones*/
INSERT INTO expedientes (expte,observaciones,sexo_id,apellido1,nombre,regimen)values ('','Este expediente fue eliminado en su momento por el personal de CTAEX. Ha sido rescatado por Fotex tras la reestructuración de la BD por estar presente en tablas auxiliares.',2,'CONTRERAS PEÑAS','MARIA LUISA','DEFENSA JUDICIAL');
INSERT INTO expedientes (expte,observaciones,sexo_id,apellido1,nombre,regimen)values ('','Este expediente fue eliminado en su momento por el personal de CTAEX. Ha sido rescatado por Fotex tras la reestructuración de la BD por estar presente en tablas auxiliares.',2,'ARTENIEVA GRIGORIAN','EDITA','DEFENSA JUDICIAL');
INSERT INTO expedientes (expte,observaciones,sexo_id,apellido1,nombre,regimen)values ('','Este expediente fue eliminado en su momento por el personal de CTAEX. Ha sido rescatado por Fotex tras la reestructuración de la BD por estar presente en tablas auxiliares.',2,'GALINDO ACEVEDO','SACRAMENTO','DEFENSA JUDICIAL');
INSERT INTO expedientes (expte,observaciones,sexo_id,apellido1,nombre,regimen)values ('','Este expediente fue eliminado en su momento por el personal de CTAEX. Ha sido rescatado por Fotex tras la reestructuración de la BD por estar presente en tablas auxiliares.',1,'HERNANDEZ SANCHEZ','JUAN','DEFENSA JUDICIAL');
update defensas_judiciales dj set expediente_id =(select id from expedientes e where e.nombre=dj.nombre and e.apellido1=dj.apellidos);

