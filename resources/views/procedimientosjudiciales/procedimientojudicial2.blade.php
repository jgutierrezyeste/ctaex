@php
    $ruta_regreso="index_apm";
    $subtitulo="Procedimientos Judicialess";
    $rutaEdicion="procedimientosJudiciales.edit";
    $rutaDelete="procedimientosJudiciales.destroy";
    $rutaAniadir="procedimientosJudiciales.create"; 
    $campos=['abreviatura','nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($procedimientos as $procedimiento)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $procedimiento->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$procedimiento"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$procedimiento"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>