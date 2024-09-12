@php
    $rutaRegreso="index_apm";
    $subtitulo="Modos Resolucion";
    $rutaEdicion="resolucionModos.edit";
    $rutaActualizar="resolucionModos.actualizar";
    $rutaDelete="resolucionModos.destroy";
    $rutaAniadir="resolucionModos.create"; 
    $rutaEliminar="resolucionModos.eliminar";
    $campos=['nombre'];
    $getById="resolucionModosId/";

@endphp

<x-mostrarmenusapmselect :elementos="$modosresoluciones" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>