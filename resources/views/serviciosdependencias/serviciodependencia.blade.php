@php
    $ruta_regreso="index_apm";
    $subtitulo="Dependencias Servicios";
    $rutaEdicion="serviciosDependencias.edit";
    $rutaDelete="serviciosDependencias.destroy";
    $rutaAniadir="serviciosDependencias.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($servicios as $servicio)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $servicio->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$servicio"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$servicio"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>