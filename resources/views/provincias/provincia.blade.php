@php
    $ruta_regreso="index_apm";
    $subtitulo="Provincias";
    $rutaEdicion="provincias.edit";
    $rutaDelete="provincias.destroy";
    $rutaAniadir="provincias.create"; 
    $campos=['nombre','patologia_general_id'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($provincias as $provincia)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $provincia->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$provincia"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$provincia"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>