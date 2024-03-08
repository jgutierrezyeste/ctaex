@extends ('layouts.landing')
@section('title','Tipos Via')
@section('subtitle','LISTADO DE TIPOS DE VIA')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Tipos Via</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($vias as $via)  
                <tr> 
                    <td>{{ $via->nombre }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('tiposVia.edit',$via->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('tiposVia.destroy',$via->id) }}">
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


    
    <form method="GET" action="{{route('tiposVia.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR TIPO VIA" />
    </form>
@endsection