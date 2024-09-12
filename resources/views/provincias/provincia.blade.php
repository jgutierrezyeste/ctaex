@php
    $rutaRegreso="index_apm";
    $subtitulo="Provincias";
    $rutaEdicion="provincias.edit";
    $rutaActualizar="provincias.actualizar";
    $rutaDelete="provincias.destroy";
    $rutaAniadir="provincias.create";
    $rutaEliminar="provincias.eliminar"; 
    $campos=['nombre'];
    $getById="provinciasId/";

@endphp

<x-mostrarmenusapmselect :elementos="$provincias" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>