

@php
    $titulo_menu="MODIFICAR EXPEDIENTE";  
    $ruta="expedientes.modificar";  
    $vista="expedientes.editexpediente";
   
@endphp
<x-show_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista"></x-show_general>