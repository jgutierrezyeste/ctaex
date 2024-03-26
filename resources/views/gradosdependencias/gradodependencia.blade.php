@php
    $ruta_regreso="index_apm";
    $subtitulo="Grados Dependencia";
    $rutaEdicion="gradosDependencia.edit";
    $rutaDelete="gradosDependencia.destroy";
    $rutaAniadir="gradosDependencia.create"; 
    $campos=['grado'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($grados as $grado)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $grado->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$grado"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$grado"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>