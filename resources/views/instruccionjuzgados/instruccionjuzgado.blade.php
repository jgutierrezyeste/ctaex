@extends ('layouts.landing')
@section('title','Juzgados Instruccion')
@section('subtitle','Juzgados Instruccion')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Juzgados</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($juzgados as $juzgado)  
                <tr> 
                    <td>{{ $juzgado->nombre }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('juzgadoInstruccion.edit',$juzgado->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('juzgadoInstruccion.destroy',$juzgado->id) }}">
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
    
    <form method="GET" action="{{route('juzgadoInstruccion.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR JUZGADO DE INSTRUCCION" />
    </form>
@endsection