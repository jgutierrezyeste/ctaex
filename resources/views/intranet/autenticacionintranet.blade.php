@extends ('layouts.landing')
@section ('content')

@component('_components.saludo')
        @slot('saludo','Bienvenido a la Comisión tutelar de adultos')
        @slot('extenso','Debe identificarse')
@endcomponent

@include('layouts._partials.login')  
<div align="center">
    <form method="GET" action="{{route('index_intranet') }}">
        @csrf
        <input type="submit" class="btn-login" value = "LOGIN" />
    </form>
</div>

@endsection