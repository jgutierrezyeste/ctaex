@php
    $rutaRegreso="index_apm";
    $subtitulo="Carpetas";
    $rutaEdicion="carpetas.edit";
    $rutaActualizar="carpetas.actualizar";
    $rutaDelete="carpetas.destroy";
    $rutaAniadir="carpetas.create"; 
    $rutaEliminar="carpetas.eliminar";
    $campos=['nombre'];
    $getById="carpetasId/";

@endphp

<x-mostrarmenusapmselect :elementos="$carpetas" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>