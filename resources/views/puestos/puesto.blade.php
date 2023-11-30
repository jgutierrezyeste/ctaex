@extends ('layouts.landing')
@section('title','Puestos')
@section('subtitle','Puestos ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Puestos</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($puestos as $puesto)  
                <tr> 
                    <td>{{ $puesto->puesto }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('puestos.edit',$puesto->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('puestos.destroy',$puesto->id) }}">
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
    
    <form method="GET" action="{{route('puestos.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR PUESTO" />
    </form>
@endsection