@php
    $ruta_regreso="index_apm";
    $subtitulo="Sexo";
    $rutaEdicion="sexo.edit";
    $rutaDelete="sexo.destroy";
    $rutaAniadir="sexo.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($sexos as $sexo)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $sexo->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$sexo"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$sexo"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>