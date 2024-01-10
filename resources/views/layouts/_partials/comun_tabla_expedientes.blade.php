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
                    <option value="{{ $expediente['id'] }}">{{ $expediente['expte'] }}</option>
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
            @foreach ($expedientes as $expediente)
                <option value=""></option>
            @endforeach
            
        </select>
    </td>
</tr>

<tr>
    <td width="20%" bgcolor="white"> 
        <font face="Arial">
        <label> Apellidos </label>
        </font>
    </td>

    <td width="60%" bgcolor="#FFEBCD">      
        <input type="text" id="apellido" name="apellido" style="color:blue"/>
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