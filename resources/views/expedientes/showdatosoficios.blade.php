@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_datos_oficios  :expediente="$expediente"></x-tabla_datos_oficios>
@endsection