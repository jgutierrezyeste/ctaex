@php
    $rutaRegreso="index_apm";
    $subtitulo="Patologías concretas";
    $rutaEdicion="patologiasConcretas.edit";
    $rutaActualizar="patologiasConcretas.actualizar";
    $rutaDelete="patologiasConcretas.destroy";
    $rutaAniadir="patologiasConcretas.create"; 
    $rutaEliminar="patologiasConcretas.eliminar";
    $campos=['nombre'];
    $getById="patologiasConcretasId/";

@endphp

<x-mostrarmenusapmselect :elementos="$patologias" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>