
@extends ('layouts.landing')
@section('title','Expedientes')
@section('subtitle','Expedientes')

@section('content')
  
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Expte</td>
            <td>Apellido</td>
            <td>Nombre</td>
            <td>Fecha de nacimiento</td>
            <td>Numero de documento</td>
            
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($expedientes as $expediente)  
                <tr> 
                    
                    <td>{{ $expediente->expte?? '' }}</td>
                    <td>{{ $expediente->apellido?? '' }}</td>
                    <td>{{ $expediente->nombre?? '' }}</td>
                    <td>{{ $expediente->fecha_nacimiento?? '' }}</td>
                    <td>{{ $expediente->numero_documento?? '' }}</td>
                    <td>
                        <form method="GET" action="{{route('expedientes.edit',$expediente->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('expedientes.destroy',$expediente->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value = "DELETE" />
                        </form>
                    </td>
                </tr>
            @endforeach    
        </tbody>
    </table>
    {{ $expedientes->appends($_GET)->links() }}
    <x-regreso  ruta="expedientes.consultar" regreso="Back "></x-regreso>
@endsection
