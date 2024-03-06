@extends ('layouts.landing')
@section('title','Servicios Dependencias')
@section('subtitle','Servicios Dependencias')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Servicios</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($servicios as $servicio)  
                <tr> 
                    <td>{{ $servicio->nombre }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('serviciosDependencias.edit',$servicio->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('serviciosDependencias.destroy',$servicio->id) }}">
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
    
    <form method="GET" action="{{route('serviciosDependencias.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR SERVICIO DEPENDENCIA" />
    </form>
@endsection