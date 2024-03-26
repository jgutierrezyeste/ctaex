@php
    $ruta_regreso="index_apm";
    $subtitulo="Motivos";
    $rutaEdicion="motivos.edit";
    $rutaDelete="motivos.destroy";
    $rutaAniadir="motivos.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($motivos as $motivo)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $motivo->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$motivo"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$motivo"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>