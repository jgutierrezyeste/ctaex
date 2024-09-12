

@php
    $titulo_menu="LISTADO DE EXPEDIENTES";  
    $ruta="expedientes.consultar";  
    $vista="expedientes.consultarexpediente";
    $campos=['nombre','apellido1','apellido2','fecha_aceptacion','fecha_entrada_area_aecca','fecha_remision','fecha_recepcion'];
   
      
@endphp
<x-show_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido1="$apellido1" :apellido2="$apellido2" :numexpteintranet="$numexpteintranet" :campos="$campos" :ruta="$ruta" :vista="$vista"></x-show_general>

