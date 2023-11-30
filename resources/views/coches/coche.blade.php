@extends ('layouts.landing')
@section('title','Coche')
@section('subtitle','Coche')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Coche</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($coches as $coche)  
                <tr> 
                    <td>{{ $coche->coche }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('coches.edit',$coche->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('coches.destroy',$coche->id) }}">
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
    
    <form method="GET" action="{{route('coches.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR COCHE" />
    </form>
@endsection