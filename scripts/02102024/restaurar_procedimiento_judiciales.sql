
/*volvemos a insertar los procedimientos que eliminamos en su dia por ser duplicados,*/
insert into procedimientos_judiciales (id, abreviatura, nombre) values (15, 'VRB','JUICIO VERBAL');
insert into procedimientos_judiciales (id, abreviatura, nombre) values (16, 'X00','JURISDICCION VOLUNTARIA (GENERICO)');
insert into procedimientos_judiciales (id, abreviatura, nombre) values (20, 'X08','TUTELA');
insert into procedimientos_judiciales (id, abreviatura, nombre) values (21, 'X09','CURATELA');

update expedientes_intranet ei set ei.procedimientojudicial_id = (select id from procedimientos_judiciales p where p.abreviatura = ei.procedimiento_judicial);


