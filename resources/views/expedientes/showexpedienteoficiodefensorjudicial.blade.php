@php
    $titulo_menu="MANDAR OFICIOS ACUERDO DEFENSOR JUDICIAL";  
    $ruta="expedientes.oficios";  
    $vista="expedientes.oficiosdefensorjudicial";
   
@endphp
<x-show_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista"></x-show_general>