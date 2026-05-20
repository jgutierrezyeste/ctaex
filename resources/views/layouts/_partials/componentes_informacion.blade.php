<form id="datos_expediente" name="datos_expediente"  method ="GET" >
    @csrf
    <div align="right">
    </br>
    <x-comun_expedientes titulo="" ruta="index_intranet"> </x-comun_expedientes>
    <x-ficha :expediente="$expediente"  :tipoficha="$tipoficha"></x-ficha>
    </div>  
</br>
</br>
    <div style="display:flex">
    <x-tabla_menu_procesos_expediente :expediente="$expediente" ></x-tabla_menu_procesos_expediente>
    
    <x-tabla_juridico  :expediente="$expediente"></x-tabla_juridico>
    </div>
    <a href="{{route('expedientes.consultar','expedientes.consultarexpediente')}}"> Vuelta a consulta </a>
    

</form>