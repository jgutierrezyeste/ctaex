@extends ('layouts.landing')
@section('title','Nivel Dependencia')
@section('subtitle','Nivel Dependencia ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Niveles Dependencias</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($niveles as $nivel)  
                <tr> 
                    <td>{{ $nivel->nivel }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('nivelDependencias.edit',$nivel->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('nivelDependencias.destroy',$nivel->id) }}">
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
    
    <form method="GET" action="{{route('nivelDependencias.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR NIVEL DEPENDENCIA" />
    </form>
@endsection