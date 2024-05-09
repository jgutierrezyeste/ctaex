update expediente_entidad_bancaria set iban = NULL where iban ='';
update expediente_entidad_bancaria set observaciones = NULL where observaciones ='';
/*elimino espacios en blanco del campo iban*/
update expediente_entidad_bancaria set iban = replace(iban, ' ', '');
/*elimino espcacios en blanco de las observaciones*/
update expediente_entidad_bancaria set observaciones=ltrim(observaciones);
/*division del iban en los distintos campos*/
update expediente_entidad_bancaria set codigo_iban = substring(iban,1,4), entidad_financiera = substring(iban,5,4), oficina=substring(iban,9,4), digito_control=substring(iban,13,2), numero_cuenta=substring(iban,15,10) where (length(iban)=24);
update expediente_entidad_bancaria set entidad_financiera = substring(iban,1,4), oficina=substring(iban,5,4), digito_control=substring(iban,9,2), numero_cuenta=substring(iban,11,10) where (length(iban)=20);
