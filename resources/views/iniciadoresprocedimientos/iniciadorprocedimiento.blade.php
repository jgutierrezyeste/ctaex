@extends ('layouts.landing')
@section('title','Iniciador Procedimiento')
@section('subtitle','Iniciador Procedimiento')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Iniciadores</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($iniciadores as $iniciador)  
                <tr> 
                    <td>{{ $iniciador->iniciador }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('iniciadorProcedimiento.edit',$iniciador->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('iniciadorProcedimiento.destroy',$iniciador->id) }}">
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
    
    <form method="GET" action="{{route('iniciadorProcedimiento.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR PROCEDIMIENTO" />
    </form>
@endsection