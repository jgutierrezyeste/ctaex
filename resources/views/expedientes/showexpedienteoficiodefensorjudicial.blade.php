@php
    $titulo_menu="MANDAR OFICIOS ACUERDO DEFENSOR JUDICIAL";  
    $ruta="expedientes.oficios";  
    $vista="expedientes.oficiosdefensorjudicial";
    $campos=['expte','nombre','apellido1'];
@endphp
<x-show_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido1="$apellido1" :campos="$campos" :ruta="$ruta" :vista="$vista"></x-show_general>