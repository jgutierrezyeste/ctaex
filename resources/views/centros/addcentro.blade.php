@php
    $ruta_regreso="index_apm";
    $subtitulo="Añadir Centro nuevo";
    $rutaGuardar="centros.store";
    $rutaIndice="centros.index";
    $campos=['nombre','tipo_via_id','direccion','numero','planta','letra','codigo_postal_id','telefono','telefono2','fax','correo_electronico','observaciones'];


@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice" :campos="$campos" >
   </x-addopcionmenuapm>