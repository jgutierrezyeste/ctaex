<tr>
    <td width="20%" bgcolor="white"> 
        <font face="Arial">
        <label> Número de expediente </label>
        </font>
    </td>        
            
    <td width="60%" bgcolor="#FFEBCD">   
            
            
            <select id="id" name="id" class="form-control" style="width:100px">
                <option value=""></option>
                @foreach ($expedientes as $expediente)
                    <option value="{{ $expediente['id'] }}">{{ $expediente['num_expte_intranet'] }}</option>
                @endforeach
                
            </select>
    </td>      
</tr>
            
<tr>
    <td width="20%" bgcolor="white"> 
        <font face="Arial">
        <label> Regimen Inicial </label>
        </font>
    </td>

    <td width="60%" bgcolor="#FFEBCD">      
        <select id="regimen_inicial" name="regimen_inicial" class="form-control" style="width:100px">
            <option value=""></option>
            @foreach ($regimenes as $regimen)
            <option value="{{ $regimen['id'] }}">{{ $regimen['nombre'] }}</option>
        @endforeach
            
        </select>
    </td>
</tr>

<tr>
    <td width="20%" bgcolor="white"> 
        <font face="Arial">
        <label> Apellido1 </label>
        </font>
    </td>

    <td width="60%" bgcolor="#FFEBCD">      
        <input type="text" id="apellido1" name="apellido1" style="color:blue"/>
    </td>
</tr>

<tr>
    <td width="20%" bgcolor="white"> 
        <font face="Arial">
        <label> Apellido2 </label>
        </font>
    </td>

    <td width="60%" bgcolor="#FFEBCD">      
        <input type="text" id="apellido2" name="apellido2" style="color:blue"/>
    </td>
</tr>

<tr>
    <td width="20%" bgcolor="white"> 
        <font face="Arial">
        <label> Nombre </label>
        </font>
    </td>

    <td width="60%" bgcolor="#FFEBCD">      
        <input type="text" id="nombre" name="nombre" style="color:blue"/>
    </td>
</tr>