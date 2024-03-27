@php
    $ruta_regreso="index_apm";
    $subtitulo="Tipos de Regimen";
    $rutaEdicion="tiposRegimen.edit";
    $rutaDelete="tiposRegimen.destroy";
    $rutaAniadir="tiposRegimen.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($tiposregimen as $tiporegimen)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $tiporegimen->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$tiporegimen"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$tiporegimen"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>