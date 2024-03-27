@php
    $ruta_regreso="index_apm";
    $subtitulo="Tipo Restitucion";
    $rutaEdicion="tiposRestitucion.edit";
    $rutaDelete="tiposRestitucion.destroy";
    $rutaAniadir="tiposRestitucion.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($tiposrestitucion as $tiporestitucion)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $tiporestitucion->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$tiporestitucion"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$tiporestitucion"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>