@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_datos_inventarios  :expediente="$expediente"></x-tabla_datos_inventarios>
@endsection