@php
    $ruta_regreso="index_apm";
    $subtitulo="Estados";
    $rutaEdicion="estados.edit";
    $rutaDelete="estados.destroy";
    $rutaAniadir="estados.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($estados as $estado)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $estado->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$estado"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$estado"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>