/*insercion datos tabla autorizaciones*/
INSERT INTO `autorizaciones` (`nombre`) VALUES ('CONTRATAR');
INSERT INTO `autorizaciones` (`nombre`) VALUES ('ANULAR PODER NOTARIAL');
INSERT INTO `autorizaciones` (`nombre`) VALUES ('USO ARMAS');
INSERT INTO `autorizaciones` (`nombre`) VALUES ('PERMISO CONDUCIR');
INSERT INTO `autorizaciones` (`nombre`) VALUES ('ESTETICA');
INSERT INTO `autorizaciones` (`nombre`) VALUES ('CERTIFICADO OPERABILIDAD');
INSERT INTO `autorizaciones` (`nombre`) VALUES ('OTORGAR TESTAMENTO');
INSERT INTO `autorizaciones` (`nombre`) VALUES ('REDES SOCIALES');

/*insercion datos tabla tipos_regimen*/
INSERT INTO `tipos_regimen` (`nombre`) VALUES ('INICIAL');
INSERT INTO `tipos_regimen` (`nombre`) VALUES ('ACTUAL');
INSERT INTO `tipos_regimen` (`nombre`) VALUES ('DEFINITIVO');

/*insercion datos tabla tipos_restitucion*/
INSERT INTO `tipo_restitucion` (`nombre`) VALUES ('REINTEGRO');
INSERT INTO `tipo_restitucion` (`nombre`) VALUES ('RETIRADA DE MEDIDAS');




/*insercion datos tabla familiares, que hay que cambiar por el nombre de representantes*/
INSERT INTO `representantes` (`nombre`, `apellido1`, `apellido2`) VALUES ('DEMETRIO JESUS', 'GALLARDO', 'REDONDO');
INSERT INTO `representantes` (`nombre`) VALUES ('COMITE CIUDADANO ANTISIDA DE BURGOS');
INSERT INTO `representantes` (`nombre`, `apellido1`, `apellido2`) VALUES ('DIEGO', 'MORENO', 'GIL');
INSERT INTO `representantes` (`nombre`) VALUES ('FUNDACION MALAGUEÑA DE TUTELAS');
INSERT INTO `representantes` (`nombre`, `apellido1`, `apellido2`) VALUES ('ELADIA', 'FERNANDEZ', 'SANCHEZ');
INSERT INTO `representantes` (`nombre`, `apellido1`, `apellido2`) VALUES ('JUANA', 'RODRIGUEZ', 'GARCIA');
INSERT INTO `representantes` (`nombre`) VALUES ('AGENCIA MADRILEÑA PARA LA TUTELA DE ADULTOS');
INSERT INTO `representantes` (`nombre`, `apellido1`, `apellido2`) VALUES ('MARIA DOLORES', 'SANCHO', 'RODRIGUEZ');
INSERT INTO `representantes` (`nombre`, `apellido1`, `apellido2`) VALUES ('FRANCISCO', 'ESCUDERO', 'ALMENA');
INSERT INTO `representantes` (`nombre`, `apellido1`, `apellido2`) VALUES ('FRANCISCO', 'NIETO', 'LABRADOR');
INSERT INTO `representantes` (`nombre`, `apellido1`, `apellido2`) VALUES ('TELESFORA', 'NIETO', 'LABRADOR');
INSERT INTO `representantes` (`nombre`, `apellido1`, `apellido2`) VALUES ('JOSE EMILIIO', 'PARRA', 'DIAZ');

/*insercio datos tabla tipos_via*/
INSERT INTO `tipos_via` (`nombre`) VALUES ('ACERA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('ALDEA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('ALAMEDA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('AMPLIACION');
INSERT INTO `tipos_via` (`nombre`) VALUES ('ANGOSTA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('APARTAMENTOS');
INSERT INTO `tipos_via` (`nombre`) VALUES ('ACEQUIA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('APARTADO DE CORREOS');
INSERT INTO `tipos_via` (`nombre`) VALUES ('ATAJO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('AVENIDA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('BAJADA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('BARRANCO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('BARRIADA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('BLOQUES');
INSERT INTO `tipos_via` (`nombre`) VALUES ('BARRIO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('CALLEJA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('CALLEJUELA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('CHALET');
INSERT INTO `tipos_via` (`nombre`) VALUES ('CALLEJON');
INSERT INTO `tipos_via` (`nombre`) VALUES ('CALLE');
INSERT INTO `tipos_via` (`nombre`) VALUES ('CAMINO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('COSTANILLA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('COLONIA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('COOPERATIVA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('CARRERA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('CASERIO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('CARRETERA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('CUESTA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('CALZADA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('ESCALA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('EDIFICIO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('ESCALINATA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('ESCALERA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('ESTRADA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('GLORIETA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('GRUPO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('CORRAL');
INSERT INTO `tipos_via` (`nombre`) VALUES ('LUGAR');
INSERT INTO `tipos_via` (`nombre`) VALUES ('LLANO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('MERCADO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('MUNICIPIO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('MONTAÑA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('MANZANA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PASEO ALTO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('POBLADO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PARTICULAR');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PASADIZO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PLAZOLETA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('POLIGONO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PASILLO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PASAJE');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PROLONGACION');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PASO BAJO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PASEO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PARQUE');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PORTALES');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PASO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PATIO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PLAZUELA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PRIVADA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('PLAZA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('RAMAL');
INSERT INTO `tipos_via` (`nombre`) VALUES ('RAMBLA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('RINCONADA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('RONDA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('RESIDENCIA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('RESIDENCIAL');
INSERT INTO `tipos_via` (`nombre`) VALUES ('RINCON');
INSERT INTO `tipos_via` (`nombre`) VALUES ('RAMPA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('RIBERA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('SECTOR');
INSERT INTO `tipos_via` (`nombre`) VALUES ('SENDA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('SENDERO');
INSERT INTO `tipos_via` (`nombre`) VALUES ('SUBIDA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('TRANSVERSAL');
INSERT INTO `tipos_via` (`nombre`) VALUES ('TORRE');
INSERT INTO `tipos_via` (`nombre`) VALUES ('TRAVESIA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('TRASERA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('TORRENTE');
INSERT INTO `tipos_via` (`nombre`) VALUES ('URBANIZACION');
INSERT INTO `tipos_via` (`nombre`) VALUES ('VIA');
INSERT INTO `tipos_via` (`nombre`) VALUES ('VILLAS');
INSERT INTO `tipos_via` (`nombre`) VALUES ('VIVIENDAS');

/*insercion datos tabla documentos identificativos*/
INSERT INTO `documentos_identificativos` (`tipo`) VALUES ('DNI');
INSERT INTO `documentos_identificativos` (`tipo`) VALUES ('ESPAÑOLES SIN DNI NO RESIDENTES EN ESPAÑA');
INSERT INTO `documentos_identificativos` (`tipo`) VALUES ('EXTRANJEROS SIN NIE EN ESPAÑA');

/*insercion datos tabla modos_resolucion*/
INSERT INTO `modos_resolucion` (`nombre`) VALUES ('NOMBRAMIENTO');
INSERT INTO `modos_resolucion` (`nombre`) VALUES ('MEDIDAS JUDICIALES DE APOYO');
INSERT INTO `modos_resolucion` (`nombre`) VALUES ('MIXTA');

/*insercion de obseracion en la tabla expedientes en referencia a la fecha de alta*/
update expedientes set observaciones='Hemos actualizado el campo fecha de alta con el formato dd-mm-aaaa.'

