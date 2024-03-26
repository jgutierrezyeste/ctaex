@php
    $ruta_regreso="index_apm";
    $subtitulo="Empleados";
    $rutaEdicion="empleados.edit";
    $rutaDelete="empleados.destroy";
    $rutaAniadir="empleados.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($empleados as $empleado)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $empleado->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$empleado"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$empleado"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>