@php
    $ruta_regreso="index_apm";
    $subtitulo="Documentos identificativos";
    $rutaEdicion="documentosIdentificativos.edit";
    $rutaDelete="documentosIdentificativos.destroy";
    $rutaAniadir="documentosIdentificativos.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($documentos as $documento)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $documento->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$documento"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$documento"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>