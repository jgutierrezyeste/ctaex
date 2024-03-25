@php
    $ruta_regreso="index_apm";
    $subtitulo="Aseguradoras";
    $rutaEdicion="aseguradoras.edit";
    $rutaDelete="aseguradoras.destroy";
    $rutaAniadir="aseguradoras.create"; 
    $campos=['nombre','telefono1','telefono2'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($aseguradoras as $aseguradora)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $aseguradora->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$aseguradora"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$aseguradora"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>