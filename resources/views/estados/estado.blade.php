@php
    $rutaRegreso="index_apm";
    $subtitulo="Estados";
    $rutaEdicion="estados.edit";
    $rutaActualizar="estados.actualizar";
    $rutaDelete="estados.destroy";
    $rutaAniadir="estados.create"; 
    $rutaEliminar="estados.eliminar";
    $campos=['nombre'];
    $getById="estadosId/";

@endphp

<x-mostrarmenusapmselect :elementos="$estados" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>