UPDATE `expedientes` SET `apellido1` = 'RODRIGUEZ MARTIN' WHERE (`expte` = '05/C/2019');
UPDATE `expedientes` SET `apellido1` = 'RODRIGUEZ MARTINEZ',`nombre`='JUAN MARIA' WHERE (`expte` = '04/C/2019');
UPDATE `domicilios` SET `nombre` ='JUAN MARIA' WHERE (`expte` = '04/C/2019');
UPDATE 
`domicilios` SET `nombre` ='MARIA ISABEL' WHERE (`expte` = '25/T/2019');

update expedientes e set domicilio_id=(select id from domicilios where expte=e.expte and nombre=e.nombre) where expte='04/C/2019';
update expedientes e set domicilio_id=(select id from domicilios where expte=e.expte and nombre=e.nombre) where expte='25/T/2019';
update domicilios d set expte=(select expte from expedientes where nombre=d.nombre and apellido1=d.apellidos) where nombre='BARTOLOME' and apellidos='ALBA GRAGERA';
update expedientes e set domicilio_id=(select id from domicilios where expte=e.expte and nombre=e.nombre) where expte='27/T/2019';
update expedientes e set domicilio_id=(select id from domicilios where apellidos=e.apellido1 and nombre=e.nombre) where nombre='JOAQUINA' and apellido1='MAYORAL PIZARRO';
