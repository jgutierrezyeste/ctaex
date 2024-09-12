@php
    $rutaRegreso="index_apm";
    $subtitulo="Años";
    $rutaEdicion="años.edit";
    $rutaActualizar="años.actualizar";
    $rutaDelete="años.destroy";
    $rutaAniadir="años.create"; 
    $rutaEliminar="años.eliminar";
    $campos=['nombre'];
    $getById="añosId/";

@endphp

<x-mostrarmenusapmselect :elementos="$años" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>