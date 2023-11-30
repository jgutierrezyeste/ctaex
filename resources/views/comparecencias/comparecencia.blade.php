@extends ('layouts.landing')
@section('title','Comparecencia')
@section('subtitle','Comparecencia')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Comparecencia</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($comparecencias as $comparecencia)  
                <tr> 
                    <td>{{ $comparecencia->comparecencia }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('comparecencias.edit',$comparecencia->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('comparecencias.destroy',$comparecencia->id) }}">
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
    
    <form method="GET" action="{{route('comparecencias.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR COMPARECENCIA" />
    </form>
@endsection