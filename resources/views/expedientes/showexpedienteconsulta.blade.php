

@php
    $titulo_menu="LISTADO DE EXPEDIENTES";  
    $ruta="expedientes.consultar";  
    $vista="expedientes.consultarexpediente";
   
@endphp
<x-show_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista"></x-show_general>
