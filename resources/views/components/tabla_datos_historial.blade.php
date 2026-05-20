@props (['expediente'])
@php
$archivo=fopen("historial.txt","w+");
    $sucesos= $expediente->historial->where('is_deleted',2);
    fwrite($archivo, print_r($sucesos,true).PHP_EOL);

@endphp


<table  cellspacing="0" cellpadding="8" border="0" align="center">
    <thead>
        <tr>
            <td width="20%" class="columna_cabecera">Fecha del suceso</td>
            <td width="80%" class="columna_cabecera">Descripción</td>

        </tr>
    </thead>
    
    <tbody>
        @if($sucesos)
        @foreach($sucesos as $suceso)
        <tr>
            <td  style="border:1px solid; padding:2px; background-color: rgb(224, 204, 204)">
                <input style="text-align:center" class="inputtable" id="fecha_suceso" type="text" style="color:blue" value="{{ $suceso->fecha_suceso??'' }}"></input>
                
            </td>
            <td style="border:1px solid; padding:2px; background-color: rgb(224, 204, 204)">
                <p id="descripcion" name="descripcion" >{{ $suceso->descripcion }}</p>
            </td>
        </tr>
        @endforeach
        @endif
        
        
    </tbody>
</table>
