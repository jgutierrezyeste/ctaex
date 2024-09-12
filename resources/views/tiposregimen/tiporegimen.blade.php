@php
    $rutaRegreso="index_apm";
    $subtitulo="Tipos de Regimen";
    $rutaEdicion="tiposRegimen.edit";
    $rutaActualizar="tiposRegimen.actualizar";
    $rutaDelete="tiposRegimen.destroy";
    $rutaAniadir="tiposRegimen.create"; 
    $rutaEliminar="tiposRegimen.eliminar";
    $campos=['nombre'];
    $getById="tiposRegimenId/";

@endphp

<x-mostrarmenusapmselect :elementos="$tiposregimen" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>