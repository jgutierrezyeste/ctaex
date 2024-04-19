@extends ('layouts.landing')
@section ('content')

<x-saludo saludo="BIENVENIDO AL CENTRO TUTELAR DE ADULTOS" extenso="Identifiquese o regístrese"></x-saludo>


@include('layouts._partials.login_intranet')  


@endsection