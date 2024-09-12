@props(['elementos','campos','nombreMenu','rutaActualizar','getById','rutaEliminar'])

<table align="center" margin-left="20%" cellpadding="5"  border="0" bgcolor="#FFEBCD">
                    
                    
    <tbody>
        <tr><!--fila-->
            <td  bgcolor="white" colspan="2"><!--columna-->
                <font size="3" color="black" face="Arial">
                    <b>{{ $nombreMenu }} _________________________________</b>
                </font>
            </td>
        </tr>
        <form method="POST" action="{{ route($rutaActualizar) }}" id="seleccion" name="seleccion">

            <tr>                   
                <td  >   
                    
                        @method('PUT')
                        @csrf                    
                        <font size="2" color="black" face="Arial">
                            <b>{{ $nombreMenu }}  </b>
                        </font>
                        <select id="select" name="select" class="form-control" style="width:300px" >
                            <option selected="selected" value="0"></option>
                        
                            @foreach ($elementos as $elemento)
                                <option  value="{{ $elemento->id}}" >{{ $elemento[$campos[0]] }}
                                </option>
                                
                            @endforeach
                            
                        </select></br>
                    </td>
                

                    
                
            </tr>
            <input type='hidden' name="id" id="id" value="" />
            @foreach ($campos as $campo)
                <tr> 
                        <td  >  
                                    <label> {{strtoupper($campo)}} </label>
                                    <input size="60px" class="camposelemento" type="text" name="{{ $campo }}" id="{{ $campo }}" value="" /><br/>
                                
                        </td>
                        
                </tr> 
            @endforeach
                    
            <tr align="right">
                <td>
                    <input type="submit"  value="GUARDAR CAMBIOS"/>

                </td>
            </tr>

            

            
        </form> 
        <form id="borrar" name="borrar" method="POST" action="{{route($rutaEliminar) }}">

            <tr align="right">
                <td>
                        @csrf
                        @method('DELETE')
                        <input type="hidden" id="borrado" name="borrado" value=""/>
                        <input id="eliminar" name="eliminar" type="submit" value = "DELETE" />
                </td>
            </tr>      
        </form>
        

    </tbody>

</table>


<script src="https://code.jquery.com/jquery-3.7.1.js">   </script>
 <script type="text/javascript">
        

                
                /*$(document).ready(function(){
                    $("#select").change(onSelectChange);
                });

                function onSelectChange(){
                    var selected=$("#select option:selected"); 
                    alert(selected);
                    var id_seleccionado = document.getElementById("select").value;
                    
                    
                    $('#id').val(id_seleccionado);
                    
                    //$('.camposelemento').val(selected.text());
                   
                
                }
                /* function onSelectChange(){
                var selected=$("#select option:selected");
                //alert(selected);
                var id_seleccionado = document.getElementById("select").value;
                var seleccion = document.getElementById("select").value;
                alert(seleccion);
                var lcampos=[];
                var camposarriba = '<?php echo json_encode($campos); ?>';
                var newcampos = JSON.parse(camposarriba);
                    newcampos.forEach(function(value, index)
                {
                    lcampos[index]=value;
                    alert(lcampos[index]);
                    $('#'+value).val(selected.text());
                });
                
                }*/
                
                $("#select").change(function(){
                  
                    var getById = '<?php echo json_encode($getById); ?>';
                    var newgetById=JSON.parse(getById);
                   
                    var id = document.getElementById("select").value;    
                    $.ajax({
                    url: newgetById + id,
                    type: 'GET',
                    success: function (result) {
                       
                                var lcampos=[];
                                var nombre;
                                var camposarriba = '<?php echo json_encode($campos); ?>';
                                var newcampos = JSON.parse(camposarriba);

                                //alert(newcampos);
                                //alert(result.nombre);
                                //alert(result.abreviatura);
                                $('#id').val(result.id);
                                $('#borrado').val(result.id);
                                    newcampos.forEach(function(value, index)
                                {
                                    lcampos[index]=value;
                                    c=lcampos[index];
                                    //alert(c);
                                    ($('#'+c).val(result[c]));
                                    //alert($('#'+c).val(result.abreviatura));

                                    
                                });
                            
                            
                    }
                    });

                });
        		


               /* $("#eliminar").on('click',function(){
                    alert("hola");
                    var rutaEli = '<?php echo json_encode($rutaEliminar); ?>';
                    var newrutaEli=JSON.parse(rutaEli);
                    alert(newrutaEli);
                    var id = document.getElementById("select").value;  
                  
                    $.ajax({
                    url: newrutaEli + id,
                    type: 'DELETE',
                    data: id,
                    
                    success: function (data) {
                       
                                alert("exito");
                            
                            
                    },
                    error: function(result) { alert('Data not found'); }
                    });
                });*/
      
</script>

