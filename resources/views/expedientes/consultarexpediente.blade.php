@extends ('layouts.principalIntranet')
@section('title','Comisión tutelar de adultos')
@section('subtitle','CONSULTA DE EXPEDIENTES ')

@section('content')
<div >   
<table>
    <tbody>
        <tr>
            <td>Numero de Expediente</td>
            <td> 
                <label> Numero de expediente </label>
                <select id="Num_expediente" name="Num_expediente" class="form-control">
                    @foreach ($expedientes as $expediente)
                        <option value="{{ $expediente['expte'] }}"></option>
                    @endforeach
                </select>
                
            <td>
        </tr>
    </tbody>
</table>
    
@endsection
