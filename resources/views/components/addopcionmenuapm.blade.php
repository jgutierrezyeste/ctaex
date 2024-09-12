
@props(['titulo','rutaRegreso','rutaGuardar','rutaIndice','campos'])
@extends ('layouts.landing')
@section('title','Comision Tutelar de adultos')

@section('subtitle')

    <x-comun_expedientes :titulo="$titulo" :ruta="$rutaRegreso"></x-comun_expedientes>
</br></br></br>
@endsection

@section('content')
    
<form method ="POST" action ="{{route($rutaGuardar) }}" >
    @csrf
    

    <table align="center" margin-left="20%" cellpadding="5"  border="0" bgcolor="#FFEBCD">
                    
                    
        <tbody>
            <tr><!--fila-->
                <td  bgcolor="white" colspan="2"><!--columna-->
                    <font size="3" color="black" face="Arial">
                        <b>{{ $titulo }} _________________________________</b>
                    </font>
                </td>
            </tr>
            <form method="POST" action="{{ route($rutaGuardar) }}">
    
            
                <input type='hidden' name="id" id="id" value="" />
                @foreach ($campos as $campo)
                    <tr> 
                        @csrf 
                            <td  >  
                                        <label> {{strtoupper($campo)}} </label>
                                        <input size="60px" class="camposelemento" type="text" name="{{ $campo }}" id="{{ $campo }}" style="border:1px dashed" /><br/>
                                    
                                        
                                        @error ($campo)
                                            <p style ="color:red;">{{ $message }}</p>
                                        @enderror
                            </td>
                            
                    </tr> 
                @endforeach    
            </form> 
            
            
    
        </tbody>
    </table>


        <div class="container" align="center">
         <input type="submit" value="Guardar"/>
    </div>
    
</form>
<x-boton_indicemenu :ruta="$rutaIndice"></x-boton_indicemenu>
@endsection






