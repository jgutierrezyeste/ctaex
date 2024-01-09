@extends ('layouts.landing')
@section('title','Comisión tutelar de adultos')


@section('subtitle')
    <table width="100%" border="0">
        <tbody>
            <tr>
                <td width="33%" align="left">
                    @component('_components.back_principal')
                    @endcomponent
                </td>
                <td align="center">
                    <font size ="6" color="DarkOrange" >
                        <b> CONSULTA DE EXPEDIENTES </b>
                    </font>
                </td>
                <td width="33%"></td>
            </tr>
        </tbody>
    </table>

@endsection

@section('content')
<script src="https://code.jquery.com/jquery-3.7.1.js"> </script>

<div align = "center"> 

<table>
    <tbody>
        
        <tr>
            <td> 

                
                <form method ="GET" action ="{{route('expedientes.busqueda')}}">       
                    
                    @csrf
                    <div class="container">
                    <label> NUMERO EXPEDIENTE </label>
                    <select id="expte-consulta" name="id" class="form-control" style="width:100px">
                        <option value=""></option>
                        @foreach ($expedientes as $expediente)
                            <option value="{{ $expediente['id'] }}">{{ $expediente['expte'] }}</option>
                        @endforeach
                         
                    </select>
                    </div>

                    

                    @component('_components.div')
                    @slot('nombre_campo','nombre')
                    @endcomponent
                    
                    <div class="container">
                    <input type="submit" value="BUSCAR EXPEDIENTE" />
                    </div>
                
                    
                </form>
            

            <td>
        </tr>

        

    </tbody>
</table>






@endsection

<script>
    /*function submitForm() {
        alert("hola");
        var seleccion=document.getElementById('expte-action');
                 $('#eleccion').attr('action','{{ route('expedientes.buscar',$expediente) }}' );
                 alert(seleccion);
        $('form#eleccion').submit();
        return false;
    }*/
    
    /*function enviar(){
    $.ajax({
        url:"showexpediente.blade.php,
        type: 'POST',
        success: function (result){
            $("#expte").val(result.expte);
        }
    })
    });*/
    </script>