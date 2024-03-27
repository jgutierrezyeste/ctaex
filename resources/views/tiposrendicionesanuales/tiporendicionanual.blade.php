@php
    $ruta_regreso="index_apm";
    $subtitulo="Tipos de Rendicion Anual";
    $rutaEdicion="tiposRendicionAnual.edit";
    $rutaDelete="tiposRendicionAnual.destroy";
    $rutaAniadir="tiposRendicionAnual.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($tiposrendicionanual as $tiporendicionanual)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $tiporendicionanual->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$tiporendicionanual"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$tiporendicionanual"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>