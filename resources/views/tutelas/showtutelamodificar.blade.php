@php
    $titulo_menu="LISTADO DE TUTELAS";  
    $ruta="tutelas.modificar";  
    $vista="tutelas.modificartutela";
   
@endphp
<x-show_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista"></x-show_general>