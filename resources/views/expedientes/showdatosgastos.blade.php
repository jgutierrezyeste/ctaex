@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_datos_gastos  :expediente="$expediente"></x-tabla_datos_gastos>
@endsection