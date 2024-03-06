@extends ('layouts.landing')
@section('title','Procedimientos Judiciales')
@section('subtitle','LISTADO DE PROCEDIMIENTOS JUDICIALES')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Abreviatura</td>
            <td>Nombre</td>
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($procedimientos as $procedimiento)  
                <tr> 
                    <td>{{ $procedimiento->abreviatura }}</td>
                    <td>{{ $procedimiento->nombre }}</td>
                    <td>
                        <form method="GET" action="{{route('procedimientosJudiciales.edit',$procedimiento->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('procedimientosJudiciales.destroy',$procedimiento->id) }}">
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
    
    <form method="GET" action="{{route('procedimientosJudiciales.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR PROCEDIMIENTO JUDICIAL" />
    </form>
@endsection