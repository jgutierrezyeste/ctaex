@php
    $titulo_menu="MANDAR OFICIOS ACUERDO TUTOR";  
    $ruta="expedientes.oficios";  
    $vista="expedientes.oficiostutor";
    $campos=['nombre','apellido1','apellido2'];
@endphp
<x-showoficios_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido1="$apellido1" :apellido2="$apellido2" :numexpteintranet="$numexpteintranet"  :campos="$campos" :ruta="$ruta" :vista="$vista" ></x-showoficios_general>