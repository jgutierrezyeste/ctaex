@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_datos_sanitarios :expediente="$expediente"></x-tabla_datos_sanitarios>
@endsection