@php
    $ruta_regreso="index_apm";
    $subtitulo="Dependencia Servicio Subtipos";
    $rutaEdicion="subtipoDependencias.edit";
    $rutaDelete="subtipoDependencias.destroy";
    $rutaAniadir="subtipoDependencias.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($subtipos as $subtipo)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $subtipo->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$subtipo"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$subtipo"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>