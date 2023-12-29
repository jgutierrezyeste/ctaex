@extends ('layouts.landing')
@section('title','Comisión tutelar de adultos')
@section('subtitle','BUSQUEDA DE EXPEDIENTES ')

@section('content')
<div >   
<table>
    <tbody>
        <tr>
            <td>Numero de Expediente</td>
            <td> 
                <label> Numero de expediente </label>
                <select id="Num_expediente" name="Num_expediente" class="form-control" style="width:100px">
                    <option value=""></option>
                    @foreach ($expedientes as $expediente)
                        <option value="{{ $expediente['expte'] }}">{{ $expediente['expte'] }}</option>
                    @endforeach
                </select>
                
            <td>
        </tr>

        <tr>
            <td>Régimen inicial</td>
            <td> 
                <label> Regimen </label>
                <select id="regimen" name="regimen" class="form-control" style="width:100px">
                    <option value=""></option>
                    @foreach ($regimenes as $regimen)
                        <option value="{{ $regimen['regimen'] }}">{{ $regimen['regimen'] }}</option>
                    @endforeach
                </select>
                
            <td>
        </tr>

        <tr>
            <td>Apellidos</td>
            <td> 
                <input type="text" id="apellidos" name="apellidos"/>
                
            <td>
        </tr>

        <tr>
            <td>Nombre</td>
            <td> 
                <input type="text" id="nombre" name="nombre"/>
                
            <td>
        </tr>
    </tbody>
</table>
</div>
<div class="container">
    <input type=submit value="Borrar" action=""/>
</div>



<input type ='button' class="btn btn-warning"  value = 'Buscar' onclick="location.href = '{{ route('expedientes.show',$expediente) }}'"/>

@endsection
