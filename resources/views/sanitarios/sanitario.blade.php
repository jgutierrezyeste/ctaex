@extends ('layouts.landing')
@section('title','Sanitario')
@section('subtitle','Sanitario ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Sanitario</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($sanitarios as $sanitario)  
                <tr> 
                    <td>{{ $sanitario->regimen_sanitario }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('sanitarios.edit',$sanitario->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('sanitarios.destroy',$sanitario->id) }}">
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
    
    <form method="GET" action="{{route('sanitarios.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR SANITARIO" />
    </form>
@endsection