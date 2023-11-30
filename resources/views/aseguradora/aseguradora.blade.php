@extends ('layouts.landing')
@section('title','Aseguradoras')
@section('subtitle','Aseguradoras')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Aseguradoras</td>
            <td>Telefono_avisos</td>
            <td>Telefono_avisos2</td>
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($aseguradoras as $aseguradora)  
                <tr> 
                    <td>{{ $aseguradora->aseguradora }}</td>
                    <td>{{ $aseguradora->telefono_avisos }}</td>
                    <td>{{ $aseguradora->telefono_avisos2 }}</td>
                    <td>
                        <form method="GET" action="{{route('aseguradoras.edit',$aseguradora->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('aseguradoras.destroy',$aseguradora->id) }}">
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
    
    <form method="GET" action="{{route('aseguradoras.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR ASEGURADORA" />
    </form>
@endsection