@extends ('layouts.landing')
@section('title','Empleados Aecca')
@section('subtitle','Empleados Aecca')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            
            <td>Empleados</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)  
                <tr> 
                    
                    <td>{{ $empleado->empleado }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('empleadosAecca.edit',$empleado->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('empleadosAecca.destroy',$empleado->id) }}">
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
    
    <form method="GET" action="{{route('empleadosAecca.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR EMPLEADO AECCA" />
    </form>
@endsection