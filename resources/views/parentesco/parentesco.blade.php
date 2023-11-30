@extends ('layouts.landing')
@section('title','Parentescos')
@section('subtitle','Parentescos')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>PARENTESCOS</td>
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($parentescos as $parentesco)  
                <tr> 
                    <td>{{ $parentesco->parentesco }}</td>
                    <td>
                        <form method="GET" action="{{route('parentescos.edit',$parentesco->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('parentescos.destroy',$parentesco->id) }}">
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
    
    <form method="GET" action="{{route('parentescos.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR PARENTESCO" />
    </form>
@endsection