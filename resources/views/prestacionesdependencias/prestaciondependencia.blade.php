@php
    $rutaRegreso="index_apm";
    $subtitulo="Prestacion Dependencias";
    $rutaEdicion="prestacionDependencias.edit";
    $rutaActualizar="prestacionDependencias.actualizar";
    $rutaDelete="prestacionDependencias.destroy";
    $rutaAniadir="prestacionDependencias.create"; 
    $rutaEliminar="prestacionDependencias.eliminar";
    $campos=['nombre'];
    $getById="prestacionDependenciasId/";

@endphp

<x-mostrarmenusapmselect :elementos="$prestaciones" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>