@extends ('layouts.landing')
@section('title','Años')
@section('subtitle','Años')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>AÑOS</td>
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($años as $año)  
                <tr> 
                    <td>{{ $año->año }}</td>
                    <td>
                        <form method="GET" action="{{ route('años.edit',$año->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('años.destroy',$año->id) }}">
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
    
    <form method="GET" action="{{ route('años.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR AÑO" />
    </form>
@endsection