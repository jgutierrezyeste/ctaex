@php
    $ruta_regreso="index_apm";
    $subtitulo="Patologías Generales";
    $rutaEdicion="patologiasGenerales.edit";
    $rutaDelete="patologiasGenerales.destroy";
    $rutaAniadir="patologiasGenerales.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($patologias as $patologia)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $patologia->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$patologia"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$patologia"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>