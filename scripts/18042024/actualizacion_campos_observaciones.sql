UPDATE expedientes
SET observaciones_final = NULL
where observaciones_final = '';

UPDATE expedientes
SET observaciones_inv = NULL
where observaciones_inv = '';

UPDATE expedientes
SET observaciones_rdc = NULL
where observaciones_rdc = '';
