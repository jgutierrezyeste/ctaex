@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_restituciones :expediente="$expediente"></x-tabla_restituciones>
@endsection