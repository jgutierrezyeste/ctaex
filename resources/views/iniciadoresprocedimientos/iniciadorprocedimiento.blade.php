@php
    $ruta_regreso="index_apm";
    $subtitulo="Iniciadores Procedimientos";
    $rutaEdicion="iniciadorProcedimiento.edit";
    $rutaDelete="iniciadorProcedimiento.destroy";
    $rutaAniadir="iniciadorProcedimiento.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($iniciadores as $iniciador)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $iniciador->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$iniciador"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$iniciador"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>