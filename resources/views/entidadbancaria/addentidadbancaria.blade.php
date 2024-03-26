@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Entidad Bancaria nueva";
    $rutaGuardar="entidadesbancarias.store";
    $rutaIndice="entidadesbancarias.index";
    $campos=['nombre'];

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>