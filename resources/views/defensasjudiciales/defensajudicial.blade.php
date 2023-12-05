@extends ('layouts.landing')
@section('title','Defensas judiciales')
@section('subtitle','Defensas judiciales')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Num.Expte</td>
            <td>Apellidos</td>
            <td>Nombre</td>
            <td>Letrado</td>
            <td>Juzgado</td>
            <td>Fecha_aceptacion</td>
            <td>Fecha_cancelacion</td>
            <td>Motivo</td>
            <td>Situacion (alta/baja) </td>
            <td>Sexo</td>
            <td>Observaciones</td>
           
            
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($defensasjudiciales as $defensajudicial)  
                <tr> 
                    <td>{{ $defensajudicial->num_expte?? '' }}</td>
                    <td>{{ $defensajudicial->apellidos?? ''}}</td>
                    <td>{{ $defensajudicial->nombre ?? ''}}</td>  
                    <td>{{ $defensajudicial->letrados->letrado ?? '' }}</td>

                    <td>{{ $defensajudicial->juzgados->juzgado ?? '' }}</td>
                    <td>{{ $defensajudicial->fecha_aceptacion?? ''}}</td>
                    <td>{{ $defensajudicial->fecha_cancelacion ?? ''}}</td>
                    <td>{{ $defensajudicial->motivos->motivo ?? ''}}</td>
                    <td>{{ $defensajudicial->alta_baja ?? ''}}</td>
                    <td>{{ $defensajudicial->sexo ?? ''}}</td>
                    <td>{{ $defensajudicial->observaciones->proxima_declaracion ?? ''}}</td>
               
                    <td>
                        <form method="GET" action="{{route('defensasjudiciales.edit',$defensajudicial->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('defensasjudiciales.destroy',$defensajudicial->id) }}">
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
    
    <form method="GET" action="{{route('defensasjudiciales.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR DEFENSA JUDICIAL" />
    </form>
@endsection