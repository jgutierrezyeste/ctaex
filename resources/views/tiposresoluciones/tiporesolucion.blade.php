@extends ('layouts.landing')
@section('title','Tipos Resoluciones')
@section('subtitle','Tipos Resoluciones ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Tipos Resolución</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($tipos as $tipo)  
                <tr> 
                    <td>{{ $tipo->nombre }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('tiposresoluciones.edit',$tipo->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('tiposresoluciones.destroy',$tipo->id) }}">
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
    
    <form method="GET" action="{{route('tiposresoluciones.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR RESOLUCION" />
    </form>
@endsection