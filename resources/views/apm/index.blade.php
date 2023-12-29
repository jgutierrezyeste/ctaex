@extends ('layouts.landing')
@section('title')
@section('subtitle')
@section('content')
    @component('_components.saludo')
        @slot('saludo','Edicion panel de administracion')
        @slot('extenso')
    @endcomponent

    @include('layouts._partials.menuApm')

@endsection