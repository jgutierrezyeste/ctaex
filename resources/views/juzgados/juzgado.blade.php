@php
    $rutaRegreso="index_apm";
    $subtitulo="Juzgados";
    $rutaEdicion="juzgados.edit";
    $rutaActualizar="juzgados.actualizar";
    $rutaDelete="juzgados.destroy";
    $rutaAniadir="juzgados.create"; 
    $rutaEliminar="juzgados.eliminar";
    $campos=['nombre'];
    $getById="juzgadosId/";

@endphp

<x-mostrarmenusapmselect :elementos="$juzgados" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>