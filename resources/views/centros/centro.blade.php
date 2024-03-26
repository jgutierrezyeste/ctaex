@php
    $ruta_regreso="index_apm";
    $subtitulo="Centros";
    $rutaEdicion="centros.edit";
    $rutaDelete="centros.destroy";
    $rutaAniadir="centros.create"; 
    $campos=['nombre','tipo_via_id','direccion','numero','planta','letra','codigo_postal_id','telefono','telefono2','fax','correo_electronico','observaciones'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($centros as $centro)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $centro->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$centro"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$centro"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>