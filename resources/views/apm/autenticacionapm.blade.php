@extends ('layouts.landing')
@section ('content')

@component('_components.saludo')
        @slot('saludo','Bienvenido al panel de administracion')
        @slot('extenso','Debe identificarse')
@endcomponent

@include('layouts._partials.login')  
<div align="center" >
        <form method="GET" action="{{route('index_apm') }}">
            @csrf
            <input type="submit" class="btn-login" value = "LOGIN" />
        </form>
</div>

@endsection