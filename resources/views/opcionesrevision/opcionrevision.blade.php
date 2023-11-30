@extends ('layouts.landing')
@section('title','Opción Revisión')
@section('subtitle','LISTADO DE OPCIONES DE REVISION ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Opciones</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($opciones as $opcion)  
                <tr> 
                    <td>{{ $opcion->opciones }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('opcionRevision.edit',$opcion->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('opcionRevision.destroy',$opcion->id) }}">
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
    
    <form method="GET" action="{{route('opcionRevision.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR OPCION DE REVISION" />
    </form>
@endsection