@php
    $ruta_regreso="index_apm";
    $subtitulo="Trabajadores Sociales";
    $rutaEdicion="trabajadoresSociales.edit";
    $rutaDelete="trabajadoresSociales.destroy";
    $rutaAniadir="trabajadoresSociales.create"; 
    $campos=['codificacion','nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($trabajadores as $trabajador)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $trabajador->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$trabajador"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$trabajador"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>