@php
    $rutaRegreso="index_apm";
    $subtitulo="Letrados";
    $rutaEdicion="letrados.edit";
    $rutaActualizar="letrados.actualizar";
    $rutaDelete="letrados.destroy";
    $rutaAniadir="letrados.create";
    $rutaEliminar="letrados.eliminar"; 
    $campos=['nombre','apellido1','apellido2'];
    $getById="letradosId/";

@endphp

<x-mostrarmenusapmselect :elementos="$letrados" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>