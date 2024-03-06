@extends ('layouts.landing')
@section('title','Provincias')
@section('subtitle','Provincias ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Provincias</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($provincias as $provincia)  
                <tr> 
                    <td>{{ $provincia->nombre }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('provincias.edit',$provincia->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('provincias.destroy',$provincia->id) }}">
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
    
    <form method="GET" action="{{route('provincias.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR PROVINCIA" />
    </form>
@endsection