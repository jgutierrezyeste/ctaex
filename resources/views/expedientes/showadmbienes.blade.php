@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_administracion_bienes  :expediente="$expediente"></x-tabla_administracion_bienes>
@endsection