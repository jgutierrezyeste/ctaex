@php
    $ruta_regreso="index_apm";
    $subtitulo="Carpetas Decesos";
    $rutaEdicion="carpetas.edit";
    $rutaDelete="carpetas.destroy";
    $rutaAniadir="carpetas.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($carpetas as $carpeta)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $carpeta->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$carpeta"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$carpeta"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>