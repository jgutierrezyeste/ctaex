@extends ('layouts.landing')
@section('title','Patologías Generales')
@section('subtitle','LISTADO DE PATOLOGIAS GENERALES ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Patologías Generales</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($patologias as $patologia)  
                <tr> 
                    <td>{{ $patologia->nombre }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('patologiasGenerales.edit',$patologia->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('patologiasGenerales.destroy',$patologia->id) }}">
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
    
    <form method="GET" action="{{route('patologiasGenerales.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR PATOLOGIA GENERAL" />
    </form>
@endsection