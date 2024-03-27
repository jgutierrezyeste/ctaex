@php
    $ruta_regreso="index_apm";
    $subtitulo="Tipos de vía";
    $rutaEdicion="tiposVia.edit";
    $rutaDelete="tiposVia.destroy";
    $rutaAniadir="tiposVia.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($vias as $via)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $via->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$via"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$via"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>