@extends ('layouts.landing')
@section('title','Relaciones')
@section('subtitle','Relaciones')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>RELACIONES</td>
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($relaciones as $relacion)  
                <tr> 
                    <td>{{ $relacion->nombre }}</td>
                    <td>
                        <form method="GET" action="{{route('relaciones.edit',$relacion->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('relaciones.destroy',$relacion->id) }}">
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
    
    <form method="GET" action="{{route('relaciones.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR RELACION" />
    </form>
@endsection