@php
    $ruta_regreso="index_apm";
    $subtitulo="Opciones autorizacion";
    $rutaEdicion="opcionAutorizacion.edit";
    $rutaDelete="opcionAutorizacion.destroy";
    $rutaAniadir="opcionAutorizacion.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($opciones as $opcion)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $opcion->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$opcion"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$opcion"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>