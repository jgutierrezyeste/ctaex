@php
    $rutaRegreso="index_apm";
    $subtitulo="Empleados";
    $rutaEdicion="empleados.edit";
    $rutaActualizar="empleados.actualizar";
    $rutaDelete="empleados.destroy";
    $rutaAniadir="empleados.create";
    $rutaEliminar="empleados.eliminar"; 
    $campos=['nombre'];
    $getById="empleadosId/";

@endphp

<x-mostrarmenusapmselect :elementos="$empleados" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>