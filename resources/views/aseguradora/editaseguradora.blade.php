@php
    $rutaRegreso="index_apm";
    $subtitulo="Aseguradoras";
    $rutaActualizar="aseguradoras.update";
    $rutaIndice="aseguradoras.index";
    $modelo="aseguradora";
     

@endphp

<x-editopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$rutaRegreso" :rutaActualizar="$rutaActualizar" :rutaIndice="$rutaIndice" :elementoEdicion="$aseguradora" >
   
@section ('campos')
    <x-div_edicion nombreCampo="nombre" :nombreModelo="$aseguradora" ></x-div_edicion>
    <x-div_edicion nombreCampo="telefono1" :nombreModelo="$aseguradora" ></x-div_edicion>
    <x-div_edicion nombreCampo="telefono2" :nombreModelo="$aseguradora" ></x-div_edicion>
@endsection
</x-editopcionmenuapm>