@php
    $rutaRegreso="index_apm";
    $subtitulo="Opciones Autorizacion";
    $rutaEdicion="opcionAutorizacion.edit";
    $rutaActualizar="opcionAutorizacion.actualizar";
    $rutaDelete="opcionAutorizacion.destroy";
    $rutaAniadir="opcionAutorizacion.create"; 
    $rutaEliminar="opcionAutorizacion.eliminar";
    $campos=['nombre'];
    $getById="opcionAutorizacionId/";

@endphp

<x-mostrarmenusapmselect :elementos="$opciones" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>