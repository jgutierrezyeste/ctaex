@php
    $rutaRegreso="index_apm";
    $subtitulo="Nacionalidades";
    $rutaEdicion="nacionalidades.edit";
    $rutaActualizar="nacionalidades.actualizar";
    $rutaDelete="nacionalidades.destroy";
    $rutaAniadir="nacionalidades.create"; 
    $rutaEliminar="nacionalidades.eliminar";
    $campos=['nombre'];
    $getById="nacionalidadesId/";

@endphp

<x-mostrarmenusapmselect :elementos="$nacionalidades" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>