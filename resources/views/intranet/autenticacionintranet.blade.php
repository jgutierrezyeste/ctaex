@extends ('layouts.landing')
@section ('content')

@component('_components.saludo')
        @slot('saludo','Bienvenido a la Comisión tutelar de adultos')
        @slot('extenso','Debe identificarse')
@endcomponent

@include('layouts._partials.login_intranet')  


@endsection