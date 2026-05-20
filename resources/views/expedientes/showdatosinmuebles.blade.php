@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_datos_inmuebles :expediente="$expediente"></x-tabla_datos_inmuebles>
@endsection