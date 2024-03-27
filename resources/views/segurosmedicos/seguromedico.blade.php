@php
    $ruta_regreso="index_apm";
    $subtitulo="Seguros Medicos";
    $rutaEdicion="segurosMedicos.edit";
    $rutaDelete="segurosMedicos.destroy";
    $rutaAniadir="segurosMedicos.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($seguros as $seguro)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $seguro->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$seguro"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$seguro"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>