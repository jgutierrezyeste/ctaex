@php
    $ruta_regreso="index_apm";
    $subtitulo="Nacionalidades";
    $rutaEdicion="nacionalidades.edit";
    $rutaDelete="nacionalidades.destroy";
    $rutaAniadir="nacionalidades.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($nacionalidades as $nacionalidad)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $nacionalidad->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$nacionalidad"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$nacionalidad"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>