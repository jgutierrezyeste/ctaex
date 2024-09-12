@php
    $rutaRegreso="index_apm";
    $subtitulo="Tipos Restitucion";
    $rutaEdicion="tiposRestitucion.edit";
    $rutaActualizar="tiposRestitucion.actualizar";
    $rutaDelete="tiposRestitucion.destroy";
    $rutaAniadir="tiposRestitucion.create"; 
    $rutaEliminar="tiposRestitucion.eliminar";
    $campos=['nombre'];
    $getById="tiposRestitucionId/";

@endphp

<x-mostrarmenusapmselect :elementos="$tiposrestitucion" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>