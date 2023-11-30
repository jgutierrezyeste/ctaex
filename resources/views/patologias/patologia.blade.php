@extends ('layouts.landing')
@section('title','Patologías')
@section('subtitle','Patologías ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Patologías</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($patologias as $patologia)  
                <tr> 
                    <td>{{ $patologia->patologia }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('patologias.edit',$patologia->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('patologias.destroy',$patologia->id) }}">
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
    
    <form method="GET" action="{{route('patologias.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR PATOLOGIA" />
    </form>
@endsection