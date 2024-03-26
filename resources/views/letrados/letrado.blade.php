@php
    $ruta_regreso="index_apm";
    $subtitulo="Letrados";
    $rutaEdicion="letrados.edit";
    $rutaDelete="letrados.destroy";
    $rutaAniadir="letrados.create"; 
    $campos=['nombre','apellido1','apellido2'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($letrados as $letrado)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $letrado->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$letrado"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$letrado"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>