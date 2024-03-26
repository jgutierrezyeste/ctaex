@php
    $ruta_regreso="index_apm";
    $subtitulo="Juzgados";
    $rutaEdicion="juzgados.edit";
    $rutaDelete="juzgados.destroy";
    $rutaAniadir="juzgados.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($juzgados as $juzgado)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $juzgado->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$juzgado"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$juzgado"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>