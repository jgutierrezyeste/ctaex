update defensas_judiciales set sexo='HOMBRE' WHERE sexo='H'OR sexo='V';
update defensas_judiciales set sexo='MUJER' where sexo='M';
update defensas_judiciales set alta_baja='ALTA' where alta_baja='A';
update defensas_judiciales set alta_baja='BAJA' where alta_baja='B';
update defensas_judiciales dj set sexo_id=(select id from sexos where nombre=dj.sexo );
update defensas_judiciales dj set estado_id=(select id from estados where nombre=dj.alta_baja );
update defensas_judiciales dj set expediente_id=(select id from expedientes where apellido1=dj.apellidos and nombre=dj.nombre);
