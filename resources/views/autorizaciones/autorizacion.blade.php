@php
    $rutaRegreso="index_apm";
    $subtitulo="Autorizaciones";
    $rutaEdicion="autorizacion.edit";
    $rutaActualizar="autorizacion.actualizar";
    $rutaDelete="autorizacion.destroy";
    $rutaAniadir="autorizacion.create";
    $rutaEliminar="autorizacion.eliminar"; 
    $campos=['nombre'];
    $getById="autorizacionId/";

@endphp

<x-mostrarmenusapmselect :elementos="$autorizaciones" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>