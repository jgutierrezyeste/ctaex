@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_datos_representantes  :expediente="$expediente"></x-tabla_datos_representantes>
@endsection