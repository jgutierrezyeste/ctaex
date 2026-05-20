@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_datos_ingresos :expediente="$expediente"></x-tabla_datos_ingresos>
@endsection