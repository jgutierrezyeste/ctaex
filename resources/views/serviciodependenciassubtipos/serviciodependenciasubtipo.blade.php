@php
    $rutaRegreso="index_apm";
    $subtitulo="Subtipo Servicio Dependencias";
    $rutaEdicion="subtipoDependencias.edit";
    $rutaActualizar="subtipoDependencias.actualizar";
    $rutaDelete="subtipoDependencias.destroy";
    $rutaAniadir="subtipoDependencias.create"; 
    $rutaEliminar="subtipoDependencias.eliminar";
    $campos=['nombre'];
    $getById="subtipoDependenciasId/";

@endphp

<x-mostrarmenusapmselect :elementos="$subtipos" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>