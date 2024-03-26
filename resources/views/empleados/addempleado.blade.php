@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Empleado nuevo";
    $rutaGuardar="empleados.store";
    $rutaIndice="empleados.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>