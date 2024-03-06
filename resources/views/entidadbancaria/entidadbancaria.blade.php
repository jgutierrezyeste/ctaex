@extends ('layouts.landing')
@section('title','Entidades Bancarias')
@section('subtitle','Entidades Bancarias')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>ENTIDADES BANCARIAS</td>
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($entidadesbancarias as $entidadesbancaria)  
                <tr> 
                    <td>{{ $entidadesbancaria->nombre }}</td>
                    <td>
                        <form method="GET" action="{{route('entidadesbancarias.edit', $entidadesbancaria->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('entidadesbancarias.destroy', $entidadesbancaria->id) }}">
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
    
    <form method="GET" action="{{route('entidadesbancarias.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR ENTIDAD BANCARIA" />
    </form>
@endsection