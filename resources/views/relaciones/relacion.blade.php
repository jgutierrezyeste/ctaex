<!--archivo para probar el select en los menus del apm-->
@php
    $rutaRegreso="index_apm";
    $subtitulo="Relaciones";
    $rutaEdicion="relaciones.edit";
   $rutaActualizar="relaciones.actualizar"; 
   $rutaEliminar="relaciones.eliminar";
    $rutaAniadir="relaciones.create"; 
    
    $campos=['nombre'];
    $getById="relacionselect/";

@endphp

<x-mostrarmenusapmselect :elementos="$relaciones" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')         
    @endsection        
   
</x-mostrarmenusapmselect>
