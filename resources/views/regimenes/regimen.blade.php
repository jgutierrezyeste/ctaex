@extends ('layouts.landing')
@section('title','REGÍMENES')
@section('subtitle','LISTADO DE REGÍMENES ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Regimen</td>
            <td>Codigo_regimen</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($regimenes as $regimen)  
                <tr> 
                    <td>{{ $regimen->regimen }}</td>
                    <td>{{ $regimen->codigo_regimen }}</td>
                    <td>
                        <form method="GET" action="{{route('regimenes.edit',$regimen->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('regimenes.destroy',$regimen->id) }}">
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

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Regimen</td>
            <td>expte</td>
           
            
            
        </thead>
        <tbody>
            @foreach ($regimenes as $regimen)  
               
                    <tr>
                        <td>{{ $regimen-> regimen?? '' }}</td> 
                        <td>@foreach ($regimen->expedientes as $expediente)
                            {{ $expediente->expte }}
                            
                        @endforeach</td>
                        </tr>
                     
                    
         
            @endforeach  
            
            
        </tbody>
    </table>
</div>

    
    <form method="GET" action="{{route('regimenes.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR REGIMEN" />
    </form>
@endsection