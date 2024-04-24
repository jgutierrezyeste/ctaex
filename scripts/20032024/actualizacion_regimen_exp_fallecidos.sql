update expedientes set regimen = 'TUTELA' where expte like '%T%' and id>714;
update expedientes set regimen = 'CURATELA' where expte like '%C%' and id>714;
update fallecidos set expte=substring(expte,2) where (expte like '0%') and(length(expte)=10);
update fallecidos set expte=substring(expte,2) where (expte like '0%') and(length(expte)=11);
update fallecidos f set expediente_id=(select id from expedientes e where e.nombre=f.nombre and e.apellido1=f.apellidos and e.expte=f.expte); 
update fallecidos f set expediente_id=(select id from expedientes e where e.nombre=f.nombre and e.apellido1=f.apellidos); 

