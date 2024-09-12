@php
    $rutaRegreso="index_apm";
    $subtitulo="Iniciador de procedimientos";
    $rutaEdicion="iniciadorProcedimiento.edit";
    $rutaActualizar="iniciadorProcedimiento.actualizar";
    $rutaDelete="iniciadorProcedimiento.destroy";
    $rutaAniadir="iniciadorProcedimiento.create"; 
    $rutaEliminar="iniciadorProcedimiento.eliminar";
    $campos=['nombre'];
    $getById="iniciadorProcedimientoId/";

@endphp

<x-mostrarmenusapmselect :elementos="$iniciadores" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>