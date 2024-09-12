@php
    $rutaRegreso="index_apm";
    $subtitulo="Entidades bancarias";
    $rutaEdicion="entidadesbancarias.edit";
    $rutaActualizar="entidadesbancarias.actualizar";
    $rutaDelete="entidadesbancarias.destroy";
    $rutaAniadir="entidadesbancarias.create"; 
    $rutaEliminar="entidadesbancarias.eliminar";
    $campos=['nombre'];
    $getById="entidadesBancariasId/";

@endphp

<x-mostrarmenusapmselect :elementos="$entidadesbancarias" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>