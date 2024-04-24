DELETE FROM `centros` WHERE (`nombre` = 'RESIDENCIA DE MAYORES DE ALMOHARIN' and id=133) ;
delete from centros where (nombre='RESIDENCIA DE MAYORES DE ALDEA DEL CANO' and id=132);
update expedientes set centro_id=149 where centro_id =43;
delete from centros where (nombre='CENTRO RESIDENCIAL DE CASTUERA' and id=43);
update centros set nombre='RESIDENCIA DE MAYORES LA SERENA (CASTUERA)' 	WHERE id=149 and nombre='RESIDENCIA DE MAYORES LA SERENA';
update centros set nombre='RESIDENCIA DE MAYORES VILLANUEVA DE LA SERERA' where id=47 and nombre='CENTRO RESIDENCIAL FELIPE TRIGO';
delete from centros where (nombre='VIVIENDA TUTELADA P. I. MONTIJO' and id=198);
delete from centros where (nombre='RESIDENCIA SAN MIGUEL' and id=187);
update centros set nombre='RESIDENCIA DE MAYORES LA HERMANDAD DE CEDILLO' where id=134 and nombre='RESIDENCIA DE MAYORES DE CEDILLO';
update expedientes set centro_id=134 where centro_id =148;
delete from centros where (nombre='RESIDENCIA DE MAYORES LA HERMANDAD' AND id=148);

