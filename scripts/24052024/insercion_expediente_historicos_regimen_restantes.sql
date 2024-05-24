

insert into historico_expediente (expediente_id,regimen_id,tipo_regimen_id, nombre) values
(66,(select id from regimenes where nombre='ADMINISTRACION DE BIENES'),(select id from tipos_regimen where nombre='ACTUAL'),(select expte from expedientes_intranet where id=66));

insert into historico_expediente (expediente_id,regimen_id,tipo_regimen_id, nombre) values
(327,(select id from regimenes where nombre='TUTELA'),(select id from tipos_regimen where nombre='INICIAL'),(select expte from expedientes_intranet where id=327));

insert into historico_expediente (expediente_id,regimen_id,tipo_regimen_id, nombre) values
(417,(select id from regimenes where nombre='TUTELA'),(select id from tipos_regimen where nombre='INICIAL'),(select expte from expedientes_intranet where id=417));

insert into historico_expediente (expediente_id,regimen_id,tipo_regimen_id, nombre) values
(523,(select id from regimenes where nombre='TUTELA'),(select id from tipos_regimen where nombre='INICIAL'),(select expte from expedientes_intranet where id=523));

insert into historico_expediente (expediente_id,regimen_id,tipo_regimen_id, nombre) values
(523,(select id from regimenes where nombre='TUTELA'),(select id from tipos_regimen where nombre='ACTUAL'),(select expte from expedientes_intranet where id=523));

insert into historico_expediente (expediente_id,regimen_id,tipo_regimen_id, nombre) values
(713,(select id from regimenes where nombre='ADMINISTRACION DE BIENES'),(select id from tipos_regimen where nombre='ACTUAL'),(select expte from expedientes_intranet where id=713));