@php
    $rutaRegreso="index_apm";
    $subtitulo="Trabajadores Sociales";
    $rutaEdicion="trabajadoresSociales.edit";
    $rutaActualizar="trabajadoresSociales.actualizar";
    $rutaDelete="trabajadoresSociales.destroy";
    $rutaAniadir="trabajadoresSociales.create";
    $rutaEliminar="trabajadoresSociales.eliminar"; 
    $campos=['nombre','codificacion'];
    $getById="trabajadoresSocialesId/";

@endphp

<x-mostrarmenusapmselect :elementos="$trabajadores" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>