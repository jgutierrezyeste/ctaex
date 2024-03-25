

@php
    $ruta_regreso="index_apm";
    $subtitulo="Aseguradoras";
    $rutaGuardar="aseguradoras.store";
    $rutaIndice="aseguradoras.index";
     

@endphp

<x-addopcionmenuapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaGuardar="$rutaGuardar" :rutaIndice="$rutaIndice">
   
@section ('campos')

    <x-div nombreCampo="nombre" ></x-div>
    <x-div nombreCampo="telefono1" ></x-div>
    <x-div nombreCampo="telefono2" ></x-div>

@endsection
  
               

</x-addopcionmenuapm>