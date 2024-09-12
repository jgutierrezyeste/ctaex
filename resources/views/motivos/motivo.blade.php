@php
    $rutaRegreso="index_apm";
    $subtitulo="motivos";
    $rutaEdicion="motivos.edit";
    $rutaActualizar="motivos.actualizar";
    $rutaDelete="motivos.destroy";
    $rutaAniadir="motivos.create";
    $rutaEliminar="motivos.eliminar"; 
    $campos=['nombre'];
    $getById="motivosId/";

@endphp

<x-mostrarmenusapmselect :elementos="$motivos" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>