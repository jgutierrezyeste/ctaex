@php
$titulo="EDICION PANEL DE ADMINISTRACION ";    
@endphp

@extends ('layouts.landing')
@section('title','Comisión tutelar de adultos')
@section('subtitle')
    
    
    <x-comun_expedientes :titulo="$titulo"></x-comun_expedientes>
@endsection

@section('content')
@include('layouts._partials.menuApm')
    
@endsection
