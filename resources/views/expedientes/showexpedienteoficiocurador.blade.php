@php
    $titulo_menu="MANDAR OFICIOS ACUERDO CURADOR";  
    $ruta="expedientes.oficios";  
    $vista="expedientes.oficioscurador";
   
@endphp
<x-show_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista"></x-show_general>