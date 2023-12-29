@extends ('layouts.landing')
@section('title','Comisión tutelar de adultos')
@section('subtitle','CONSULTA DE EXPEDIENTES ')

@section('content')
<div > 

<table>
    <tbody>
        
        <tr>
            <td> 
                
                   
                <form method="GET" id=eleccion onsubmit="return submitForm()">
                <label> Numero de expediente </label>
                <select id="expte-action" name="expte-action" class="form-control selectpicker" style="width:100px">
                    <option value=""></option>
                    @foreach ($expedientes as $expediente)
                        <option value="{{ $expediente->id }}">{{ $expediente->expte }}</option>
                    @endforeach
                     
                </select>
                
                    @csrf
                    <input type="submit" value= "Buscar" />
                </form>
                

            <td>
        </tr>

        

    </tbody>
</table>






@endsection

<script type="text/javascript">
    function submitForm() {
        alert("hola");
        var seleccion=document.getElementById('expte-action');
                 $('#eleccion').attr('action','{{ route('expedientes.buscar',$expediente) }}' );
                 alert(seleccion);
        $('form#eleccion').submit();
        return false;
    }
</script>