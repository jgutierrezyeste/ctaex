@php
    $rutaRegreso="index_apm";
    $subtitulo="Patologías generales";
    $rutaEdicion="patologiasGenerales.edit";
    $rutaActualizar="patologiasGenerales.actualizar";
    $rutaDelete="patologiasGenerales.destroy";
    $rutaAniadir="patologiasGenerales.create"; 
    $rutaEliminar="patologiasGenerales.eliminar";
    $campos=['nombre'];
    $getById="patologiasGeneralesId/";

@endphp

<x-mostrarmenusapmselect :elementos="$patologias" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>