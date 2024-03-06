@extends ('layouts.landing')
@section('title','Prestaciones dependencias')
@section('subtitle','LISTADO DE PRESTACIONES DE DEPENDENCIA')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>prestaciones Dependencias</td>
            
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($prestaciones as $prestacion)  
                <tr> 
                    <td>{{ $prestacion->nombre }}</td>
                  
                    <td>
                        <form method="GET" action="{{route('prestacionDependencias.edit',$prestacion->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('prestacionDependencias.destroy',$prestacion->id) }}">
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
    
    <form method="GET" action="{{route('prestacionDependencias.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR PRESTACION DEPENDENCIA" />
    </form>
@endsection