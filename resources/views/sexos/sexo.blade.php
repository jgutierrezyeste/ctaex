@php
    $rutaRegreso="index_apm";
    $subtitulo="Sexos";
    $rutaEdicion="sexo.edit";
    $rutaActualizar="sexo.actualizar";
    $rutaDelete="sexo.destroy";
    $rutaAniadir="sexo.create"; 
    $rutaEliminar="sexo.eliminar";
    $campos=['nombre'];
    $getById="sexosId/";

@endphp

<x-mostrarmenusapmselect :elementos="$sexos" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>