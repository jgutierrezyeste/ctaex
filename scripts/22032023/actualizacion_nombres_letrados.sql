/*ACUALIZACION LETRADOS, SEPARANDO NOMBRE Y APELLIDOS*/
update letrados set nombre='CARLOSIVAN GIL IGLESIAS' WHERE id=2;
UPDATE letrados SET nombre = 'DESCONOCIDO ' WHERE (`id` = '3');
update letrados set apellido1= substring(nombre,locate(' ',nombre));
update letrados set apellido1=ltrim(apellido1);
update letrados set apellido2= substring(apellido1,locate(' ',apellido1));
update letrados set apellido1=substring(apellido1,1,locate(' ',apellido1));
update letrados set nombre=substring(nombre,1,locate(' ',nombre));
update letrados set nombre=rtrim(nombre), apellido1=rtrim(apellido1),apellido2=rtrim(apellido2), nombre=ltrim(nombre), apellido1=ltrim(apellido1),apellido2=ltrim(apellido2);
update letrados set nombre= 'CARLOS IVAN' where apellido1= 'GIL' and apellido2='IGLESIAS';


