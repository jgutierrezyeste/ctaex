@php
    $ruta_regreso="index_apm";
    $subtitulo="Prestaciones dependencias";
    $rutaEdicion="prestacionDependencias.edit";
    $rutaDelete="prestacionDependencias.destroy";
    $rutaAniadir="prestacionDependencias.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($prestaciones as $prestacion)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $prestacion->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$prestacion"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$prestacion"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>