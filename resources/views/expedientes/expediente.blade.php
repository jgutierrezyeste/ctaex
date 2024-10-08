<!--vista para indexar expedientes-->
@extends ('layouts.landing')
@section('title','Expedientes')
@section('subtitle','Expedientes')

@section('content')
  
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Expte</td>
            <td>Nombre_trabajador_social</td>
            <td>Centro</td>
            <td>Domicilio</td>
            <td>Regimen</td>
            <td>Situacion</td>
            <td>Sexo</td>
            <td>Nacionalidad</td>
            <td>Tipo de documento</td>
            <td>Seguros Médicos</td>
            <td>Patologia Concreta</td>
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
                    <td>{{ $expediente->trabajadoressociales->nombre?? ''}}</td>
                    <td>{{ $expediente->centros->nombre_centro?? ''}}</td>
                    <td>{{ $expediente->domicilios->direccion?? ''}}</td>
                    <td></td>  
                    <td>{{ $expediente->estado_expediente ?? '' }}</td>

                    <td>{{ $expediente->sexos->sexo ?? '' }}</td>
                    <td>{{ $expediente->nacionalidades->nacionalidad ?? ''}}</td>
                    <td>{{ $expediente->tipodocumentos->tipo_documento ?? ''}}</td>
                    <td>{{ $expediente->segurosmedicos->nombre ?? ''}}</td>
                    <td></td>
                    <td>{{ $expediente->patologiasgenerales->nombre ?? ''}}</td>
                    <td>{{ $expediente->centros->nombre_centro ?? ''}}</td>
                    <td></td>
                    <td></td>
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


  
    <table class="table table-sm table-bordered">
            <thead >
                
                <td>Expte</td>
                <td>Regimen</td>
                
                
            </thead>
            <tbody>
                @foreach ($expedientes as $expediente)
                   <tr>
                    <td>{{ $expediente-> expte?? '' }}</td> 
                    <td>@foreach ($expediente->regimenes as $regimen)
                        {{ $regimen->regimen }}
                        
                    @endforeach</td>
                    </tr>
                 
                
                @endforeach

                @foreach ($expedientes as $expediente)
                   <tr>
                    <td>{{ $expediente-> expte?? '' }}</td> 
                    <td>@foreach ($expediente->patologiasconcretas as $p)
                        {{ $p->nombre??'' }}
                        
                    @endforeach</td>
                    </tr>
                 
                
                @endforeach
            </tbody>
        </table>
 
    
    
    <form method="GET" action="{{route('expedientes.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR EXPEDIENTE" />
    </form>

 
    <x-regreso  ruta="index_intranet" regreso="Back "></x-regreso>
@endsection