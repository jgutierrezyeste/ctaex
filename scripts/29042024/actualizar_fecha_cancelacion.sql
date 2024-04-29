UPDATE defensas_judiciales
SET fecha_cancelacion = CONCAT(substring_index(fecha_cancelacion,'/',-1),'-',substring_index(substring_index(fecha_cancelacion,'/',-2),'/',1),'-',substring_index(fecha_cancelacion,'/',1))
