@php
    $ruta_regreso="index_apm";
    $subtitulo="Autorizaciones";
    $rutaEdicion="autorizacion.edit";
    $rutaDelete="autorizacion.destroy";
    $rutaAniadir="autorizacion.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($autorizaciones as $autorizacion)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $autorizacion->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$autorizacion"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$autorizacion"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>