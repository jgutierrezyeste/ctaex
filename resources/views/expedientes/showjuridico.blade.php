
@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_juridico  :expediente="$expediente"></x-tabla_juridico>
@endsection


