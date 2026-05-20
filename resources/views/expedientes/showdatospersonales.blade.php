@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_datos_personales  :expediente="$expediente"></x-tabla_datos_personales>
@endsection