@php
    $ruta_regreso="index_apm";
    $subtitulo="Niveles dependencia";
    $rutaEdicion="nivelDependencias.edit";
    $rutaDelete="nivelDependencias.destroy";
    $rutaAniadir="nivelDependencias.create"; 
    $campos=['nivel'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($niveles as $nivel)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $nivel->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$nivel"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$nivel"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>