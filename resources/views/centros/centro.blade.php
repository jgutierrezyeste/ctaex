@php
    $rutaRegreso="index_apm";
    $subtitulo="Centros";
    $rutaEdicion="centros.edit";
    $rutaActualizar="centros.actualizar";
    $rutaDelete="centros.destroy";
    $rutaAniadir="centros.create"; 
    $rutaEliminar="centros.eliminar";
    $campos=['nombre','direccion','provincia','telefono'];
    $getById="centrosId/";

@endphp

<x-mostrarmenusapmselect :elementos="$centros" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>