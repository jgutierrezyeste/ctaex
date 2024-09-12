@php
    $rutaRegreso="index_apm";
    $subtitulo="Servicios de dependencias";
    $rutaEdicion="serviciosDependencias.edit";
    $rutaActualizar="serviciosDependencias.actualizar";
    $rutaDelete="serviciosDependencias.destroy";
    $rutaAniadir="serviciosDependencias.create"; 
    $rutaEliminar="serviciosDependencias.eliminar";
    $campos=['nombre'];
    $getById="serviciosDependenciasId/";

@endphp

<x-mostrarmenusapmselect :elementos="$servicios" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>