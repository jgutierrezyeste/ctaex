INSERT INTO expediente_patologia_concreta(expediente_id,patologia_concreta_id) VALUES (646, (SELECT id FROM patologia_concreta WHERE nombre = ' HIPOACUSIA'));
