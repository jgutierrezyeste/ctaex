@php
    $rutaRegreso="index_apm";
    $subtitulo="Tipos Rendicion Anual";
    $rutaEdicion="tiposRendicionAnual.edit";
    $rutaActualizar="tiposRendicionAnual.actualizar";
    $rutaDelete="tiposRendicionAnual.destroy";
    $rutaAniadir="tiposRendicionAnual.create"; 
    $rutaEliminar="tiposRendicionAnual.eliminar";
    $campos=['nombre'];
    $getById="tiposRendicionAnualId/";

@endphp

<x-mostrarmenusapmselect :elementos="$tiposrendicionanual" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>