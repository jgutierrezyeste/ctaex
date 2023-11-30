@extends ('layouts.landing')
@section('title','Años')
@section('subtitle','Años')
@section('content')
    <h1> Listado de Años </h1>
    <ul>
    @foreach ($años as $año)
        <li>
             {{ $año->año }} 
         </li>
    
    @endforeach
    </ul>
@endsection