@php
    $titulo_menu="MANDAR OFICIOS";  
    $subtitulo="AYUNTAMIENTO INFORME PENSIONES ENTIDAD GESTORA";
    $ruta="curatelas.oficios";  
    $vista="curatelas.informeayuntamiento";
   
@endphp
<x-showoficios_general :titulo="$titulo_menu" :expedientes="$expedientes" :nombre="$nombre" :id="$id" :apellido="$apellido" :ruta="$ruta" :vista="$vista" :subtitulo="$subtitulo"></x-showoficios_general>