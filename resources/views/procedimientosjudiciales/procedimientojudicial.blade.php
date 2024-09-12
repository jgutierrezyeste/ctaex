@php
    $rutaRegreso="index_apm";
    $subtitulo="Procedimientos Judicialess";
    $rutaEdicion="procedimientosJudiciales.edit";
    $rutaActualizar="procedimientosJudiciales.actualizar";
    $rutaDelete="procedimientosJudiciales.destroy";
    $rutaAniadir="procedimientosJudiciales.create"; 
    $rutaEliminar="procedimientosJudiciales.eliminar";
    $campos=['nombre','abreviatura'];
    $getById="procedimientos/";

@endphp

<x-mostrarmenusapmselect :elementos="$procedimientos" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>
