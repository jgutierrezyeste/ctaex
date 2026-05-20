@props (['expediente'])
<table class="tablemenulateral" >
    
    <tbody>
        <x-fila_menu_datos_intranet ruta="expedientes.obtenerdatos" vista="expedientes.showadmbienes" :id="$expediente->id" opcion="Administracion de bienes"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.obtenerdatos" vista="expedientes.showdefjudiciales" :id="$expediente->id" opcion="Defensas judiciales"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.obtenerdatos" vista="expedientes.showremociones" :id="$expediente->id" opcion="Remociones"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.obtenerdatos" vista="expedientes.showrestituciones" :id="$expediente->id" opcion="Reintegros capacidad"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.obtenerdatos" vista="expedientes.showjuridico" :id="$expediente->id" opcion="Jurídico"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.obtenerdatos" vista="expedientes.showexitus" :id="$expediente->id" opcion="Exitus"></x-fila_menu_datos_intranet>
        
    </tbody>
</table>