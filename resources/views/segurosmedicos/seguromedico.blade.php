@extends ('layouts.landing')
@section('title','Seguros Médicos')
@section('subtitle','Seguros Médicos ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Seguros Médicos</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($seguros as $seguro)  
                <tr> 
                    <td>{{ $seguro->nombre }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('segurosMedicos.edit',$seguro->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('segurosMedicos.destroy',$seguro->id) }}">
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
    
    <form method="GET" action="{{route('segurosMedicos.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR SANITARIO" />
    </form>
@endsection