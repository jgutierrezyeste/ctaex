@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_datos_residencia  :expediente="$expediente"></x-tabla_datos_residencia>
@endsection