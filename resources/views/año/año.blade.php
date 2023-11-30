@extends ('layouts.landing')
@section('title','Años')
@section('subtitle','Años')

@section('content')

<table class="display table table striped table-hover" style="with:100%">
        <thead>
            <tr>
            <th>AÑOS</td>
            <th></td>
            <th></td>
            </tr>
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

    
    <form method="GET" action="{{ route('años.create') }}">
        @csrf
        <input type="submit" class="button" value = "AÑADIR AÑO" />
    </form>
@endsection