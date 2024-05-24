/*ELIMINACION PROCEDIMIENTOS JUDICIALES DUPLICADOS*/
update expedientes_intranet set procedimientojudicial_id = 2 where procedimientojudicial_id=21;
update expedientes_intranet set procedimientojudicial_id = 12 where procedimientojudicial_id=16;
update expedientes_intranet set procedimientojudicial_id = 13 where procedimientojudicial_id=20;

delete from procedimientos_judiciales where id=21 and nombre='CURATELA';
delete from procedimientos_judiciales where id=15 and nombre='JUICIO VERBAL';
delete from procedimientos_judiciales where id=16 and nombre='JURISDICCION VOLUNTARIA (GENERICO)';
delete from procedimientos_judiciales where id=20 and nombre='TUTELA';