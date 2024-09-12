@php
    $rutaRegreso="index_apm";
    $subtitulo="Aseguradoras";
    $rutaEdicion="aseguradoras.edit";
    $rutaActualizar="aseguradoras.actualizar";
    $rutaDelete="aseguradoras.destroy";
    $rutaAniadir="aseguradoras.create"; 
    $rutaEliminar="aseguradoras.eliminar";
    $campos=['nombre','telefono1','telefono2'];
    $getById="aseguradorasId/";

@endphp

<x-mostrarmenusapmselect :elementos="$aseguradoras" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>