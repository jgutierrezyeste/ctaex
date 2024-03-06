@extends ('layouts.landing')
@section('title','Prestaciones')
@section('subtitle','Prestaciones ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Prestaciones</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($prestaciones as $prestacion)  
                <tr> 
                    <td>{{ $prestacion->nombre }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('prestaciones.edit',$prestacion->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('prestaciones.destroy',$prestacion->id) }}">
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
    
    <form method="GET" action="{{route('prestaciones.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR PRESTACIONES" />
    </form>
@endsection