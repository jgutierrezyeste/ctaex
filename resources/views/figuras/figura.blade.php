@extends ('layouts.landing')
@section('title','Figuras')
@section('subtitle','Figuras')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Figuras</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($figuras as $figura)  
                <tr> 
                    <td>{{ $figura->nombre }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('figuras.edit',$figura->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('figuras.destroy',$figura->id) }}">
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
    
    <form method="GET" action="{{route('figuras.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR FIGURA" />
    </form>
@endsection