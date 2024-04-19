@props(['elementos','campos','nombreMenu','rutaEdicion'])

<table width="55%" cellspacing ="0" cellpadding="5"  border="0">
                    
                    
    <tbody>
        <tr><!--fila-->
            <td bgcolor="white" colspan="2"><!--columna-->
                <font size="3" color="black" face="Arial">
                    <b>{{ $nombreMenu }} _________________________________</b>
                </font>
            </td>
        </tr>
        
        @foreach($campos as $campo)
        <tr>
            <td width="60%" bgcolor="#FFEBCD">
                <label font-size="2" >{{ $campo }}</label>
                <input type="text" id="{{ $campo }}" name="{{ $campo }}" value=""  align="left"/>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.7.1.js"> 
</script>
<script type="text/javascript">
    $(document).ready(function(){
            $('#select').on('change',function(){
                $('#nombre').val($('#select option:selected').text());
                nombre=$('#nombre').val();
            });


            




    });

    </script>
