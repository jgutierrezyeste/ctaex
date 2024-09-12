@php
    $rutaRegreso="index_apm";
    $subtitulo="Seguros Médicos";
    $rutaEdicion="segurosMedicos.edit";
    $rutaActualizar="segurosMedicos.actualizar";
    $rutaDelete="segurosMedicos.destroy";
    $rutaAniadir="segurosMedicos.create"; 
    $rutaEliminar="segurosMedicos.eliminar";
    $campos=['nombre'];
    $getById="segurosMedicosId/";

@endphp

<x-mostrarmenusapmselect :elementos="$seguros" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>