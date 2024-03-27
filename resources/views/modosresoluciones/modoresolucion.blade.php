@php
    $ruta_regreso="index_apm";
    $subtitulo="Modos de resolución";
    $rutaEdicion="resolucionModos.edit";
    $rutaDelete="resolucionModos.destroy";
    $rutaAniadir="resolucionModos.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($modosresoluciones as $modoresolucion)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $modoresolucion->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$modoresolucion"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$modoresolucion"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>