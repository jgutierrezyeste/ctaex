@extends ('layouts.landing')
@section('title','Trabajadores Sociales')
@section('subtitle','LISTADO DE TRABAJADORES SOCIALES')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Trabajadores Sociales</td>
            <td>Codificacion</td>
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($trabajadores as $trabajador)  
                <tr> 
                    <td>{{ $trabajador->trabajador_social }}</td>
                    <td>{{ $trabajador->codificacion }}</td>
                    <td>
                        <form method="GET" action="{{route('tsAsignados.edit',$trabajador->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('tsAsignados.destroy',$trabajador->id) }}">
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

@foreach ($trabajadores as $trabajador)
    @foreach ($trabajador->expedientes as $expediente) 
        <li>{{ $trabajador->trabajador_social }}{{ $expediente->expte }}</li>
    @endforeach
@endforeach
    
    <form method="GET" action="{{route('tsAsignados.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR TRABAJADOR SOCIAL" />
    </form>
@endsection