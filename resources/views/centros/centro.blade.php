@extends ('layouts.landing')
@section('title','Aseguradoras')
@section('subtitle','Aseguradoras')

@section('content')
<div class="table table-responsive">   
<table class="table table-sm table-bordered">
        <thead >
            
            <td>Centro</td>
            <td>Tipo_via</td>
            <td>Direccion</td>
            <td>Numero</td>
            <td>Planta</td>
            <td>Letra</td>
            <td>Población</td>
            <td>Provincia</td>
            <td>Codigo_postal</td>
            <td>Teléfono</td>
            <td>Telefono2</td>
            <td>Fax</td>
            <td>Fax2</td>
            <td>Correo_electrónico</td>
            <td>Observaciones</td>
            <td></td>
            <td></td>
            
        </thead>
        <tbody>
            @foreach ($centros as $centro)  
                <tr> 
                    <td>{{ $centro->nombre_centro }}</td>
                    <td>{{ $centro->tipo_via }}</td>
                    <td>{{ $centro->direccion }}</td>
                    <td>{{ $centro->numero }}</td>
                    <td>{{ $centro->planta }}</td>
                    <td>{{ $centro->letra }}</td>
                    <td>{{ $centro->poblacion }}</td>
                    <td>{{ $centro->provincia }}</td>
                    <td>{{ $centro->codigo_postal }}</td>
                    <td>{{ $centro->telefono }}</td>
                    <td>{{ $centro->telefono2 }}</td>
                    <td>{{ $centro->fax }}</td>
                    <td>{{ $centro->fax2 }}</td>
                    <td>{{ $centro->correo_electronico }}</td>
                    <td>{{ $centro->observaciones }}</td>

                    <td>
                        <form method="GET" action="{{route('centros.edit',$centro->id) }}">
                        @csrf
                        <input type="submit" value = "EDIT" />
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{route('centros.destroy',$centro->id) }}">
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
    
    <form method="GET" action="{{route('centros.create') }}">
        @csrf
        <input type="submit" value = "AÑADIR CENTRO" />
    </form>
@endsection