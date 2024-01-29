@php
    $titulo_menu="MANDAR OFICIOS";  
    $subtitulo="SOLICITAR AUTORIZACION JUDICIAL DE INTERNAMIENTO";
    $ruta="tutelas.oficios";  
    $vista="tutelas.autorizacioninternamiento";
   
@endphp
<x-showoficios_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista" :subtitulo="$subtitulo"></x-showoficios_general>