@php
    $rutaRegreso="index_apm";
    $subtitulo="Figuras";
    $rutaEdicion="figuras.edit";
    $rutaActualizar="figuras.actualizar";
    $rutaDelete="figuras.destroy";
    $rutaAniadir="figuras.create";
    $rutaEliminar="figuras.eliminar"; 
    $campos=['nombre'];
    $getById="figurasId/";

@endphp

<x-mostrarmenusapmselect :elementos="$figuras" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>