INSERT INTO historico_expediente (expediente_id,nombre,regimen_id,observaciones)
VALUES ((SELECT expediente_id FROM administracion_bienes WHERE expte = '01/AB/2016'),'01/AB/2016',(SELECT id FROM regimenes WHERE nombre = 'ADMINISTRADOR DE BIENES'),'');

INSERT INTO historico_expediente (expediente_id,nombre,regimen_id,observaciones)
VALUES ((SELECT expediente_id FROM administracion_bienes WHERE expte = '01/AB/2017'),'01/AB/2017',(SELECT id FROM regimenes WHERE nombre = 'ADMINISTRADOR DE BIENES'),'');

INSERT INTO historico_expediente (expediente_id,nombre,regimen_id,observaciones)
VALUES ((SELECT expediente_id FROM administracion_bienes WHERE expte = '02/AB/2017'),'02/AB/2017',(SELECT id FROM regimenes WHERE nombre = 'ADMINISTRADOR DE BIENES'),'');

INSERT INTO historico_expediente (expediente_id,nombre,regimen_id,observaciones)
VALUES ((SELECT expediente_id FROM administracion_bienes WHERE expte = '01/AB/2018'),'01/AB/2018',(SELECT id FROM regimenes WHERE nombre = 'ADMINISTRADOR DE BIENES'),'');

INSERT INTO historico_expediente (expediente_id,nombre,regimen_id,observaciones)
VALUES ((SELECT expediente_id FROM administracion_bienes WHERE expte = '02/AB/2018'),'02/AB/2018',(SELECT id FROM regimenes WHERE nombre = 'ADMINISTRADOR DE BIENES'),'');

INSERT INTO historico_expediente (expediente_id,nombre,regimen_id,observaciones)
VALUES ((SELECT expediente_id FROM administracion_bienes WHERE expte = '01/AB/2020'),'01/AB/2020',(SELECT id FROM regimenes WHERE nombre = 'ADMINISTRADOR DE BIENES'),'');

INSERT INTO historico_expediente (expediente_id,nombre,regimen_id,observaciones)
VALUES ((SELECT expediente_id FROM administracion_bienes WHERE expte = '02/AB/2020'),'02/AB/2020',(SELECT id FROM regimenes WHERE nombre = 'ADMINISTRADOR DE BIENES'),'');

INSERT INTO historico_expediente (expediente_id,nombre,regimen_id,observaciones)
VALUES ((SELECT expediente_id FROM administracion_bienes WHERE expte = '03/AB/2020'),'03/AB/2020',(SELECT id FROM regimenes WHERE nombre = 'ADMINISTRADOR DE BIENES'),'');

INSERT INTO historico_expediente (expediente_id,nombre,regimen_id,observaciones)
VALUES ((SELECT expediente_id FROM administracion_bienes WHERE expte = '01/AB/2021'),'01/AB/2021',(SELECT id FROM regimenes WHERE nombre = 'ADMINISTRADOR DE BIENES'),'');