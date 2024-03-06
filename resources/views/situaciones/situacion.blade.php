@extends ('layouts.landing')
@section('title','Estado')
@section('subtitle','Estados ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Estados</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($estados as $estado)  
                <tr> 
                    <td>{{ $estado->nombre }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('estado.edit',$estado->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('estado.destroy',$estado->id) }}">
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
    
    <form method="GET" action="{{route('estado.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR ESTADO" />
    </form>
@endsection