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

        <tr>
            <td>Propuesta Aceptacion</td>
            <td>Desde : 
                <div class="input-group date" id="propuestaAceptacionDesde"  >
                    <input type="text"  class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#propuestaAceptacion').datepicker({
                            format: "yy/mm/dd",
                            weekStart: 0,
                            calendarWeeks: true,
                            autoclose: true,
                            todayHighlight: true, 
                            orientation: "auto"
                        });
                    });
                </script>

                Hasta : 
                <div class="input-group date" id="propuestaAceptacionHasta"  >
                    <input type="text"  class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>

                
                <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
   
                
            <td>

        </tr>

        <tr>
            <td>Entrada Sanidad y Dependencia</td>
            <td>Desde : 
                <div class="input-group date" id="entradaDesde"  >
                    <input type="text"  class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#entradaDesde').datepicker({
                            format: "yy/mm/dd",
                            weekStart: 0,
                            calendarWeeks: true,
                            autoclose: true,
                            todayHighlight: true, 
                            orientation: "auto"
                        });
                    });
                </script>

                Hasta : 
                <div class="input-group date" id="entradaHasta"  >
                    <input type="text"  class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>

                
                <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
   
                
            <td>
                
        </tr>

       
        <tr>
            <td>Enviar Gabinete Jurídico</td>
            <td>Desde : 
                <div class="input-group date" id="egabineteJuridicoDesde"  >
                    <input type="text"  class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#egabineteJuridicoDesde').datepicker({
                            format: "yy/mm/dd",
                            weekStart: 0,
                            calendarWeeks: true,
                            autoclose: true,
                            todayHighlight: true, 
                            orientation: "auto"
                        });
                    });
                </script>

                Hasta : 
                <div class="input-group date" id="egabineteJuridicoHasta"  >
                    <input type="text"  class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>

                
                <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
   
                
            <td>
                
        </tr>
        <tr>
            <td>Recibir Gabinete Jurídico</td>
            <td>Desde : 
                <div class="input-group date" id="rgabineteJuridicoDesde"  >
                    <input type="text"  class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#rgabineteJuridicoDesde').datepicker({
                            format: "yy/mm/dd",
                            weekStart: 0,
                            calendarWeeks: true,
                            autoclose: true,
                            todayHighlight: true, 
                            orientation: "auto"
                        });
                    });
                </script>

                Hasta : 
                <div class="input-group date" id="rgabineteJuridicoHasta"  >
                    <input type="text"  class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>

                
                <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
   
                
            <td>
                
        </tr>

    </tbody>
</table>

<div class="container">
    <input type=submit value="Borrar" action=""/>
</div>



<input type ='button' class="btn btn-warning"  value = 'Buscar' onclick="location.href = '{{ route('expedientes.show',$expediente) }}'"/>
@endsection
