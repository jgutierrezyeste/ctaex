@extends ('layouts.landing')
@section('title','Sexo')
@section('subtitle','Sexo ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Sexo</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($sexos as $sexo)  
                <tr> 
                    <td>{{ $sexo->sexo }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('sexo.edit',$sexo->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('sexo.destroy',$sexo->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value = "DELETE" />
                        </form>
                    </td>
                </tr>
            @endforeach     
        </tbody>
    </table>
</div>
    
    <form method="GET" action="{{route('sexo.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR SEXO" />
    </form>
@endsection