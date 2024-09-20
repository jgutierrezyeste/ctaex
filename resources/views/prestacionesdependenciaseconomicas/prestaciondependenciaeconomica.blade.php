@php
    $rutaRegreso="index_apm";
    $subtitulo="Prestaciones Dependencias Económicas";
    $rutaEdicion="prestacionDependenciasEconomicas.edit";
    $rutaActualizar="prestacionDependenciasEconomicas.actualizar";
    $rutaDelete="prestacionDependenciasEconomicas.destroy";
    $rutaAniadir="prestacionDependenciasEconomicas.create"; 
    $rutaEliminar="prestacionDependenciasEconomicas.eliminar";
    $campos=['nombre'];
    $getById="prestacionDependenciasEconomicasId/";

@endphp

<x-mostrarmenusapmselect :elementos="$prestacioneseconomicas" :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :vista="$rutaEdicion" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" :rutaActualizar="$rutaActualizar" :getById="$getById" :rutaEliminar="$rutaEliminar">    

    @section('cuerpo')
    @endsection        
   
</x-mostrarmenusapmselect>