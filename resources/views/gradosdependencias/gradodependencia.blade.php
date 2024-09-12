@php
    $rutaRegreso="index_apm";
    $subtitulo="Grados de dependencia";
    $rutaEdicion="gradosDependencia.edit";
    $rutaActualizar="gradosDependencia.actualizar";
    $rutaDelete="gradosDependencia.destroy";
    $rutaAniadir="gradosDependencia.create";
    $rutaEliminar="gradosDependencia.eliminar"; 
    $campos=['grado'];
    $getById="gradosDependenciaId/";

@endphp

<x-mostrarmenusapmselect :elementos="$grados" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>