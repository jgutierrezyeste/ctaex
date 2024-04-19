@props(['titulo','rutaRegreso','rutaActualizar','rutaIndice','elementoEdicion','campos'])
@extends ('layouts.landing')
@section('title','Comision Tutelar de adultos')

@section('subtitle')

    <x-comun_expedientes :titulo="$titulo" :ruta="$rutaRegreso"></x-comun_expedientes>
    
@endsection

@section('content')
    
<form method ="POST" action ="{{route($rutaActualizar,$elementoEdicion->id) }}" >
    @method('PUT')
    @csrf
    

    <table width="55%" cellspacing ="0" cellpadding="5"  border="0" align="center">
                    
                    
        <tbody>
            <tr><!--fila-->
                <td bgcolor="white" colspan="2"><!--columna-->
                    <font size="3" color="black" face="Arial">
                        <b>{{ $titulo }} _________________________________</b>
                    </font>
                </td>
            </tr>
            <tr>
            @foreach($campos as $campo)
            
                <td width="60%" bgcolor="#FFEBCD">
                    
                    <x-div_edicion nombreCampo="{{ $campo }}" :nombreModelo="$elementoEdicion" ></x-div_edicion>
                </td>
            
            @endforeach
            </tr>
        </tbody>
    </table>
    
    
    
    
    <div class="container" align="center">
        <input type="submit" value="Actualizar"/>
    </div>
</form>
<x-boton_indicemenu :ruta="$rutaIndice"></x-boton_indicemenu>
@endsection



<!--<table width="100%" cellspacing="0" cellpadding ="5" align="center">
    @foreach ($campos as $campo)
    <td>
    <x-div_edicion nombreCampo="{{ $campo }}" :nombreModelo="$elementoEdicion" ></x-div_edicion>
    </td>
    @endforeach
    
</table>-->
