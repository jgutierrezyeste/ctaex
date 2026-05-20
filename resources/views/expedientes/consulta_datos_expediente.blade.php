
@extends ('layouts.informacion_expediente')
  @section('componente_especifico')
    <x-tabla_datos_generales :expediente="$expediente"></x-tabla_datos_personales>
  @endsection