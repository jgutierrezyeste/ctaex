@extends ('layouts.landing')
@section('title','Procedimientos Resoluciones')
@section('subtitle','Procedimientos Resoluciones ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Procedimientos Resolución</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($procedimientos as $procedimiento)  
                <tr> 
                    <td>{{ $procedimiento->nombre }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('procedimientosresoluciones.edit',$procedimiento->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('procedimientosresoluciones.destroy',$procedimiento->id) }}">
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
    
    <form method="GET" action="{{route('procedimientosresoluciones.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR RESOLUCION" />
    </form>
@endsection