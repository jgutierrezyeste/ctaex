@php
    $rutaRegreso="index_apm";
    $subtitulo="Nivel de dependencia";
    $rutaEdicion="nivelDependencias.edit";
    $rutaActualizar="nivelDependencias.actualizar";
    $rutaDelete="nivelDependencias.destroy";
    $rutaAniadir="nivelDependencias.create"; 
    $rutaEliminar="nivelDependencias.eliminar";
    $campos=['nivel'];
    $getById="nivelDependenciasId/";

@endphp

<x-mostrarmenusapmselect :elementos="$niveles" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>