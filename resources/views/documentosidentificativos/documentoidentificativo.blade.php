@extends ('layouts.landing')
@section('title','Servicios Dependencias Subtipo')
@section('subtitle','Servicios Dependencias Subtipo')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Documento Identificativo</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($documentos as $documento)  
                <tr> 
                    <td>{{ $documento->tipo_documento }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('documentosIdentificativos.edit',$documento->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('documentosIdentificativos.destroy',$documento->id) }}">
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
    
    <form method="GET" action="{{route('documentosIdentificativos.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR DOCUMENTO IDENTIFICATIVO" />
    </form>
@endsection