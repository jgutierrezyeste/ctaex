@extends ('layouts.landing')
@section('title','Grados Dependencias')
@section('subtitle','Grados Dependencias')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Grados</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($grados as $grado)  
                <tr> 
                    <td>{{ $grado->grado }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('gradosDependencia.edit',$grado->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('gradosDependencia.destroy',$grado->id) }}">
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
    
    <form method="GET" action="{{route('gradosDependencia.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR GRADO" />
    </form>
@endsection