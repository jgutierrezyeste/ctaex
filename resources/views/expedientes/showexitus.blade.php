@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_exitus  :expediente="$expediente"></x-tabla_exitus>
@endsection