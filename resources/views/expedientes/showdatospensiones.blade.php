@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_datos_prestaciones  :expediente="$expediente"></x-tabla_datos_prestaciones>
@endsection