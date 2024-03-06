@extends ('layouts.landing')
@section('title','Nacionalidades')
@section('subtitle','Nacionalidades ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Nacionalidades</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($nacionalidades as $nacionalidad)  
                <tr> 
                    <td>{{ $nacionalidad->nombre }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('nacionalidades.edit',$nacionalidad->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('nacionalidades.destroy',$nacionalidad->id) }}">
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
    
    <form method="GET" action="{{route('nacionalidades.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR NACIONALIDAD" />
    </form>
@endsection