@php
    $ruta_regreso="index_apm";
    $subtitulo="Figuras";
    $rutaEdicion="figuras.edit";
    $rutaDelete="figuras.destroy";
    $rutaAniadir="figuras.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($figuras as $figura)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $figura->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$figura"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$figura"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>