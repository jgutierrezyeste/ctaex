@php
    $ruta_regreso="index_apm";
    $subtitulo="Regimenes";
    $rutaEdicion="regimenes.edit";
    $rutaDelete="regimenes.destroy";
    $rutaAniadir="regimenes.create"; 
    $campos=['nombre','abreviatura'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($regimenes as $regimen)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $regimen->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$regimen"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$regimen"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>