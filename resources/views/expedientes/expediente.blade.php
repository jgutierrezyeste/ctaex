@extends ('layouts.landing')
@section('title','Expedientes')
@section('subtitle','Expedientes')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Expte</td>
            <td>Nombre_trabajador_social</td>
            <td>Regimen</td>
            <td>Situacion</td>
            <td>Sexo</td>
            <td>Nacionalidad</td>
            <td>Tipo de documento</td>
            <td>Otra asistencia Sanitaria</td>
            <td>Patologia General</td>
            <td>Centros</td>
            <td>Proxima Declaracion</td>
            <td>Resolucion</td>
            <td>Aseguradora</td>
            <td>Grado Dependencia</td>
            <td>Servicio de dependencia</td>
            <td>Subtipo de servicio</td>
            <td>Prestacion de dependencia</td>
            <td>Nivel de dependencia</td>
            <td>Procedimiento judicial</td>
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($expedientes as $expediente)  
                <tr> 
                    <td>{{ $expediente->expte?? '' }}</td>
                    <td>{{ $expediente->tsasignado->trabajador_social?? ''}}</td>
                    <td>{{ $expediente->regimens->regimen?? ''}}</td>  
                    <td>{{ $expediente->situacions->situacion ?? '' }}</td>

                    <td>{{ $expediente->sexos->sexo ?? '' }}</td>
                    <td>{{ $expediente->nacionalidads->nacionalidad ?? ''}}</td>
                    <td>{{ $expediente->tipodocumentos->tipo_documento ?? ''}}</td>
                    <td>{{ $expediente->sanitarios->regimen_sanitario ?? ''}}</td>
                    <td>{{ $expediente->patologiasgenerales->patologia ?? ''}}</td>
                    <td>{{ $expediente->centros->nombre_centro ?? ''}}</td>
                    <td>{{ $expediente->declaraciones->proxima_declaracion ?? ''}}</td>
                    <td>{{ $expediente->resoluciones->resolucion ?? ''}}</td>
                    <td>{{ $expediente->aseguradoras->aseguradora ?? ''}}</td>
                    <td>{{ $expediente->gradosdependencias->grado ?? ''}}</td>
                    
                    <td>{{ $expediente->serviciosdependencias->servicio ?? ''}}</td>
                    <td>{{ $expediente->subtiposerviciosdependencias->servicio_subtipo ?? ''}}</td>
                    <td>{{ $expediente->prestacionesdependencias->prestacion_dependencia ?? ''}}</td>
                    <td>{{ $expediente->nivelesdependencias->nivel ?? ''}}</td>
                    <td>{{ $expediente->procedimientosjudiciales->procedimiento ?? ''}}{{ $expediente->procedimientosjudiciales->codificacion ?? ''}}</td>
                    <td>
                        <form method="GET" action="{{route('expedientes.edit',$expediente->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('expedientes.destroy',$expediente->id) }}">
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
    
    <form method="GET" action="{{route('expedientes.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR EXPEDIENTE" />
    </form>
@endsection