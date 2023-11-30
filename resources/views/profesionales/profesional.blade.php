@extends ('layouts.landing')
@section('title','Profesionales')
@section('subtitle','Profesionales ')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Profesionales</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($profesionales as $profesional)  
                <tr> 
                    <td>{{ $profesional->profesional }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('profesionales.edit',$profesional->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('profesionales.destroy',$profesional->id) }}">
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
    
    <form method="GET" action="{{route('profesionales.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR PROFESIONAL" />
    </form>
@endsection