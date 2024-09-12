@php
    $rutaRegreso="index_apm";
    $subtitulo="Regimenes";
    $rutaEdicion="regimenes.edit";
    $rutaActualizar="regimenes.actualizar";
    $rutaDelete="regimenes.destroy";
    $rutaAniadir="regimenes.create"; 
    $rutaEliminar="regimenes.eliminar";
    $campos=['nombre','abreviatura'];
    $getById="regimenesId/";

@endphp

<x-mostrarmenusapmselect :elementos="$regimenes" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>