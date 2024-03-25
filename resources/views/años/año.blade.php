@php
    $ruta_regreso="index_apm";
    $subtitulo="Años";
    $rutaEdicion="años.edit";
    $rutaDelete="años.destroy";
    $rutaAniadir="años.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($años as $año)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $año->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$año"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$año"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>