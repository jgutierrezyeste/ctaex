@extends ('layouts.landing')
@section('title','Ctaex Representantes')
@section('subtitle','Ctaex Representantes')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Ctaex Representantes</td>
           
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($representantes as $representante)  
                <tr> 
                    <td>{{ $representante->nombre }}</td>
                    
                    <td>
                        <form method="GET" action="{{route('representantesCtaex.edit',$representante->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('representantesCtaex.destroy',$representante->id) }}">
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
    
    <form method="GET" action="{{route('representantesCtaex.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR REPRESENTANTE CTAEX" />
    </form>
@endsection