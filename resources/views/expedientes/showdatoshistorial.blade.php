@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_datos_historial  :expediente="$expediente"></x-tabla_datos_historial>
@endsection