@php
    $rutaRegreso="index_apm";
    $subtitulo="Prestacion Dependencias Servicios";
    $rutaEdicion="prestacionDependenciasServicios.edit";
    $rutaActualizar="prestacionDependenciasServicios.actualizar";
    $rutaDelete="prestacionDependenciasServicios.destroy";
    $rutaAniadir="prestacionDependenciasServicios.create"; 
    $rutaEliminar="prestacionDependenciasServicios.eliminar";
    $campos=['nombre'];
    $getById="prestacionDependenciasServiciosId/";

@endphp

<x-mostrarmenusapmselect :elementos="$servicios" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>