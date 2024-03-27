@php
    $ruta_regreso="index_apm";
    $subtitulo="Representantes";
    $rutaEdicion="representantes.edit";
    $rutaDelete="representantes.destroy";
    $rutaAniadir="representantes.create"; 
    $campos=['nombre','apellido1','apellido2'];
@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($representantes as $representante)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $representante->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$representante"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$representante"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>