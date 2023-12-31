@extends ('layouts.landing')
@section('title','Resoluciones')
@section('subtitle','Resoluciones ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Resoluciones</td>
            <td>Fecha</td>
            <td>Juzgado</td>
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($resoluciones as $resolucion)  
                <tr> 
                    <td>{{ $resolucion->numero }}</td>
                    <td>{{ $resolucion->fecha }}</td>
                    <td>{{ $resolucion->juzgado }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('resoluciones.edit',$resolucion->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('resoluciones.destroy',$resolucion->id) }}">
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
    
    <form method="GET" action="{{route('resoluciones.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR RESOLUCION" />
    </form>
@endsection