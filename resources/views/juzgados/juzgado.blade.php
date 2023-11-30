@extends ('layouts.landing')
@section('title','Juzgados')
@section('subtitle','Juzgados ')

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
                    <td>{{ $juzgado->juzgado }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('juzgados.edit',$juzgado->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('juzgados.destroy',$juzgado->id) }}">
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
    
    <form method="GET" action="{{route('juzgados.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR JUZGADO" />
    </form>
@endsection