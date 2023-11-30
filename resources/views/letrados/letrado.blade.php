@extends ('layouts.landing')
@section('title','Letrados')
@section('subtitle','Letrados ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Letrados</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($letrados as $letrado)  
                <tr> 
                    <td>{{ $letrado->letrado }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('letrados.edit',$letrado->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('letrados.destroy',$letrado->id) }}">
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
    
    <form method="GET" action="{{route('letrados.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR LETRADO" />
    </form>
@endsection