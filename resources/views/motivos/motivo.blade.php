@extends ('layouts.landing')
@section('title','Motivos')
@section('subtitle','Motivos ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Motivos</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($motivos as $motivo)  
                <tr> 
                    <td>{{ $motivo->motivo }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('motivos.edit',$motivo->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('motivos.destroy',$motivo->id) }}">
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
    
    <form method="GET" action="{{route('motivos.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR MOTIVO" />
    </form>
@endsection