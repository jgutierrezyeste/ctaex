@php
    $rutaRegreso="index_apm";
    $subtitulo="Documentos Identificativos";
    $rutaEdicion="documentosIdentificativos.edit";
    $rutaActualizar="documentosIdentificativos.actualizar";
    $rutaDelete="documentosIdentificativos.destroy";
    $rutaAniadir="documentosIdentificativos.create"; 
    $rutaEliminar="documentosIdentificativos.eliminar";
    $campos=['nombre'];
    $getById="documentosIdentificativosId/";

@endphp

<x-mostrarmenusapmselect :elementos="$documentos" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>