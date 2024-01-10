@extends ('layouts.landing')
@section ('content')

@component('_components.saludo')
        @slot('saludo','Bienvenido al panel de administracion')
        @slot('extenso','Debe identificarse')
@endcomponent

@include('layouts._partials.login_apm')  


@endsection