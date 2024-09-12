@php
    $rutaRegreso="index_apm";
    $subtitulo="Prestaciones";
    $rutaEdicion="prestaciones.edit";
    $rutaActualizar="prestaciones.actualizar";
    $rutaDelete="prestaciones.destroy";
    $rutaAniadir="prestaciones.create"; 
    $rutaEliminar="prestaciones.eliminar";
    $campos=['nombre'];
    $getById="prestacionesId/";

@endphp

<x-mostrarmenusapmselect :elementos="$prestaciones" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>