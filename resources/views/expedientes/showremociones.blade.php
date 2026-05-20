@extends ('layouts.informacion_expediente')
@section('componente_especifico')
    <x-tabla_remociones  :expediente="$expediente"></x-tabla_remociones>
@endsection