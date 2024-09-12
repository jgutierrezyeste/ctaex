@php
    $titulo_menu="MANDAR OFICIOS ACUERDO DEFENSOR JUDICIAL";  
    $ruta="expedientes.oficios";  
    $vista="expedientes.oficiosdefensorjudicial";
    //$campos=['expte','nombre','apellido1'];
    $campos=['nombre','apellido1','apellido2'];
@endphp
<x-showoficios_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido1="$apellido1" :apellido2="$apellido2" :numexpteintranet="$numexpteintranet"  :campos="$campos" :ruta="$ruta" :vista="$vista" ></x-showoficios_general>