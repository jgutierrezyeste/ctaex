@php
    $ruta_regreso="index_apm";
    $subtitulo="Relaciones";
    $rutaEdicion="relaciones.edit";
    $rutaDelete="relaciones.destroy";
    $rutaAniadir="relaciones.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($relaciones as $relacion)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $relacion->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$relacion"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$relacion"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>