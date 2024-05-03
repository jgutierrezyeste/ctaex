UPDATE `expedientes` SET `apellido1` = 'SANCHO GARCIA' WHERE (`expte` = '01/T/2014');
UPDATE `expedientes` SET `apellido1` = 'DOS SANTOS DOS SANTOS' WHERE (`expte` = '02/T/2002');
UPDATE `expedientes` SET `nombre` = 'MARIA TRINIDAD' WHERE (`expte` = '03/C/2015');
UPDATE `expedientes` SET `apellido1` = 'GONZALEZ OLIVERA' WHERE (`expte` = '03/T/2016');

UPDATE `expedientes` SET `apellido1` = 'CAMPUS ANTE' WHERE (`expte` = '04/T/2019');
UPDATE `expedientes` SET `apellido1` = 'BUENO FERNANDEZ\r' WHERE (`expte` = '07/T/2005');
UPDATE `expedientes` SET `apellido1` = 'GALAN GILGADO' WHERE (`expte` = '08/T/2020');
UPDATE `expedientes` SET `apellido1` = 'DOS SANTOS DOS SANTOS' WHERE (`expte` = '104/T/2000');
UPDATE `expedientes` SET `apellido1` = 'CUEVAS MOYANO' WHERE (`expte` = '14/T/2021');
UPDATE `expedientes` SET `apellido1` = 'MONTAÑO RANGEL' WHERE (`expte` = '15/T/2012');
UPDATE `expedientes` SET `apellido1` = 'MEJIAS DE LA MORENA' WHERE (`expte` = '15/T/2015');
UPDATE `expedientes` SET `apellido1` = 'JIMENEZ GARCIA' WHERE (`expte` = '15/T/2016');
UPDATE `expedientes` SET `apellido1` = 'GALAN PINILLA' WHERE (`expte` = '18/T/1997');
UPDATE `expedientes` SET `apellido1` = 'DOS SANTOS DOS SANTOS' WHERE (`expte` = '19/T/2005');
UPDATE `expedientes` SET `apellido1` = 'GATO LOZANO\r' WHERE (`expte` = '21/CR/1998');
UPDATE `expedientes` SET `nombre` = 'MARIA CARMEN' WHERE (`expte` = '23/T/2019');
UPDATE `expedientes` SET `apellido1` = 'JIMENEZ SALGADO' WHERE (`expte` = '28/T/2012');
UPDATE `expedientes` SET `nombre` = 'RAUL' WHERE (`expte` = '31/T/2018');
UPDATE `expedientes` SET `apellido1` = 'DIAZ VAZQUEZ' WHERE (`expte` = '57/T/2000');
UPDATE `expedientes` SET `apellido1` = 'GOMEZ NEVADO' WHERE (`expte` = '61/T/2000');
UPDATE `expedientes` SET `apellido1` = 'CALDERA MARTIN' WHERE (`expte` = '13/T/2003');
UPDATE `expedientes` SET `nombre` = 'SOLEDAD' WHERE (`expte` = '04/CA/2001');
UPDATE `expedientes` SET `nombre` = 'MARIA MONTEVIRGEN' WHERE (`expte` = '02/T/2012');

UPDATE `fallecidos` SET `apellidos` = 'PAREDES HERNANDEZ' WHERE (`expte` = '002/T/2020');
UPDATE `fallecidos` SET `nombre` = 'NICANOR' WHERE (`expte` = '013/T/2009');
UPDATE `fallecidos` SET `nombre` = 'ANGELES' WHERE (`expte` = '022/T/2021');
UPDATE `fallecidos` SET `nombre` = 'MARIA JOSEFA' WHERE (`expte` = '035/T/2018');



update fallecidos f  set expediente_id =(select id from expedientes e where f.nombre=e.nombre and f.apellidos=e.apellido1);

















