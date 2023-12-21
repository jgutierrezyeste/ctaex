UPDATE `ctaex`.`centros` SET `provincia` = 'BADAJOZ' WHERE provincia = 'LLERENA';

UPDATE `ctaex`.`domicilios` SET `expte` = '09/CR/2010' WHERE (`expte` = '09/T/2010');
UPDATE `ctaex`.`domicilios` SET `expte` = '21/CR/2013' WHERE (`expte` = '21/T/2013');
UPDATE `ctaex`.`domicilios` SET `expte` = '25/CR/2011' WHERE (`expte` = '25/T/2011');

UPDATE `ctaex`.`expedientes` SET `domicilio_id` = (SELECT id FROM domicilios WHERE expte = '09/CR/2010') where expte = '09/CR/2010';
UPDATE `ctaex`.`expedientes` SET `domicilio_id` = (SELECT id FROM domicilios WHERE expte = '21/CR/2013') where expte = '21/CR/2013';
UPDATE `ctaex`.`expedientes` SET `domicilio_id` = (SELECT id FROM domicilios WHERE expte = '25/CR/2011') where expte = '25/CR/2011';
UPDATE `ctaex`.`expedientes` SET `domicilio_id` = (SELECT id FROM domicilios WHERE expte = '11/T/2015') where expte = '11/T/2015';

UPDATE `ctaex`.`centros` SET `poblacion` = 'VILLAFRANCA DE LOS BARROS', `provincia` = 'BADAJOZ' WHERE nombre_centro = 'MI CASA VILLAFRANCA DE LOS BARROS';

UPDATE `ctaex`.`expedientes` SET `centro_id` = NULL where centro_id = (SELECT id FROM centros WHERE nombre_centro = 'EN DOMICILIO');

DELETE FROM `ctaex`.`centros` WHERE `id` = (SELECT id FROM centros WHERE nombre_centro = 'SIN DOMICILIO');
DELETE FROM `ctaex`.`centros` WHERE `id` = (SELECT id FROM centros WHERE nombre_centro = 'SIN DOMICILIO CONOCIDO');
DELETE FROM `ctaex`.`centros` WHERE `id` = (SELECT id FROM centros WHERE nombre_centro = 'ARANCHA');
DELETE FROM `ctaex`.`centros` WHERE (`id` = '202'); /*No recuerdo el nombre de prueba que tenía */

UPDATE expedientes SET provincia = 'CACERES' WHERE expte = '06/T/2011' && provincia = 'BADAJOZ';
UPDATE expedientes SET provincia = 'BADAJOZ' WHERE expte = '21/T/2002' && provincia = 'CACERES';
UPDATE expedientes SET provincia = 'BADAJOZ' WHERE expte = '21/T/2004' && provincia = 'CACERES';
UPDATE expedientes SET provincia = 'CACERES' WHERE expte = '39/CR/2021' && provincia = 'BADAJOZ';
UPDATE expedientes SET provincia = 'CACERES' WHERE expte = '51/T/2010' && provincia = 'BADAJOZ';



