UPDATE centros SET tipo_via = 'AVENIDA' WHERE tipo_via = 'AVDA.';
UPDATE centros SET tipo_via = 'CALLE' WHERE tipo_via = 'C';
UPDATE centros SET tipo_via = 'CALLE' WHERE tipo_via = 'C/';
UPDATE centros SET tipo_via = 'CALLE' WHERE tipo_via = 'calle';
UPDATE centros SET tipo_via = 'CAMINO' WHERE tipo_via = 'CMNO.';
UPDATE centros SET tipo_via = 'CARRETERA' WHERE tipo_via = 'CTRA.';
UPDATE centros SET tipo_via = 'PASEO' WHERE tipo_via = 'PSO';
UPDATE centros SET tipo_via = 'PASEO' WHERE tipo_via = 'PSO.';
UPDATE centros SET tipo_via = 'PLAZA' WHERE tipo_via = 'PZA.';
UPDATE centros SET tipo_via = 'RONDA' WHERE tipo_via = 'RDA.';
UPDATE centros SET tipo_via = 'TRAVESIA' WHERE tipo_via = 'TRAV,';
UPDATE centros SET tipo_via = 'TRAVESIA' WHERE tipo_via = 'TRAV.';
UPDATE centros SET tipo_via = 'URBANIZACION' WHERE tipo_via = 'URB.';

UPDATE centros SET tipo_via_id = (SELECT tv.id FROM tipos_via tv WHERE tv.nombre = tipo_via);