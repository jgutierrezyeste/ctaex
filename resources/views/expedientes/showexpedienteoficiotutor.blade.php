@php
    $titulo_menu="MANDAR OFICIOS ACUERDO TUTOR";  
    $ruta="expedientes.oficistutor";  
    $vista="expedientes.oficiostutor";
   
@endphp
<x-show_general :titulo_menu="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista"></x-show_general>