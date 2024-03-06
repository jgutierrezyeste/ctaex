@extends ('layouts.landing')
@section('title','Servicios Dependencias Subtipo')
@section('subtitle','Servicios Dependencias Subtipo')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Servicios_subtipos</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($subtipos as $subtipo)  
                <tr> 
                    <td>{{ $subtipo->nombre }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('subtipoDependencias.edit',$subtipo->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('subtipoDependencias.destroy',$subtipo->id) }}">
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
    
    <form method="GET" action="{{route('subtipoDependencias.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR SERVICIO DEPENDENCIA SUBTIPO" />
    </form>
@endsection