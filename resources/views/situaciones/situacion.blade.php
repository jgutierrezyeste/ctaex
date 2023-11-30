@extends ('layouts.landing')
@section('title','Situaciones')
@section('subtitle','Situaciones ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Situaciones</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($situaciones as $situacion)  
                <tr> 
                    <td>{{ $situacion->situacion }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('situacion.edit',$situacion->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('situacion.destroy',$situacion->id) }}">
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
    
    <form method="GET" action="{{route('situacion.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR SITUACION" />
    </form>
@endsection