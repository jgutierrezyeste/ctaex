@extends ('layouts.landing')
@section('title','Entidades Bancarias')
@section('subtitle','Entidades Bancarias')
@section('content')
    <h1> Listado de Entidades Bancarias </h1>
    <ul>
    @foreach ($entidades as $entidad)
        <li>
             {{ $entidad->entidad}} 
         </li>
    
    @endforeach
    </ul>
@endsection