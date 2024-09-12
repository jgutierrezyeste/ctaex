@props (['expediente'])
<table class="tablemenulateral" >
    
    <tbody>
        <x-fila_menu_datos_intranet ruta="expedientes.datospersonales" vista="expedientes.showdatospersonales" :id="$expediente->id" opcion="Datos Personales"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.datosbancarios" vista="expedientes.showdatosbancarios" :id="$expediente->id" opcion="Bancos/Cajas"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.datosresidencia" vista="expedientes.showdatosresidencia" :id="$expediente->id" opcion="Datos Residencia"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.datosinmuebles" vista="expedientes.showdatosinmuebles" :id="$expediente->id" opcion="Inmuebles"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.datospensiones" vista="expedientes.showdatospensiones" :id="$expediente->id" opcion="Pensiones"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.datosrepresentantes" vista="expedientes.showdatosrepresentantes" :id="$expediente->id" opcion="Familiares"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.datossanitarios" vista="expedientes.showdatossanitarios" :id="$expediente->id" opcion="Socio/Sanitario"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.datosoficios" vista="expedientes.showdatosoficios" :id="$expediente->id" opcion="Fecha Oficios"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.datosinventarios" vista="expedientes.showdatosinventarios" :id="$expediente->id" opcion="Fecha Inventarios"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.datosgastos" vista="expedientes.showdatosgastos" :id="$expediente->id" opcion="Gastos Varios"></x-fila_menu_datos_intranet>
        <x-fila_menu_datos_intranet ruta="expedientes.datosingresos" vista="expedientes.showdatosingresos" :id="$expediente->id" opcion="Ingresos Varios"></x-fila_menu_datos_intranet>
    </tbody>
</table>