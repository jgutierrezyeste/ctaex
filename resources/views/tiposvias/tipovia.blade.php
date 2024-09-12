@php
    $rutaRegreso="index_apm";
    $subtitulo="Tipos de vía";
    $rutaEdicion="tiposVia.edit";
    $rutaActualizar="tiposVia.actualizar";
    $rutaDelete="tiposVia.destroy";
    $rutaAniadir="tiposVia.create"; 
    $rutaEliminar="tiposVia.eliminar";
    $campos=['nombre'];
    $getById="tiposViaId/";

@endphp

<x-mostrarmenusapmselect :elementos="$vias" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>