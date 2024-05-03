
update expedientes_intranet set apellido1= ltrim(apellido1) where id>0;
update expedientes_intranet set apellido1=rtrim(apellido1) where id>0;
update expedientes_intranet set nombre= ltrim(nombre) where id>0;
update expedientes_intranet set nombre=rtrim(nombre) where id>0;
