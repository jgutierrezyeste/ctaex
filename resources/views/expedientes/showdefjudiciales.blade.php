@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_defensas_judiciales  :expediente="$expediente"></x-tabla_defensas_judiciales>
@endsection