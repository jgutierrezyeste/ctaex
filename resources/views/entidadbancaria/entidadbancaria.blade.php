@php
    $ruta_regreso="index_apm";
    $subtitulo="Entidades bancarias";
    $rutaEdicion="entidadesbancarias.edit";
    $rutaDelete="entidadesbancarias.destroy";
    $rutaAniadir="entidadesbancarias.create"; 
    $campos=['nombre'];

@endphp

<x-mostrarmenusapm :titulo="$subtitulo" :rutaRegreso="$ruta_regreso" :rutaAniadir="$rutaAniadir" :campos="$campos" >    
    @section('cuerpo')
            @foreach ($entidadesbancarias as $entidadbancaria)  
            <tr> 
                @foreach ($campos as $campo)
                <td class="columna_datos">{{ $entidadbancaria->$campo }}</td>
                @endforeach
                <td>
                    <x-boton_editar :ruta="$rutaEdicion" :elemento="$entidadbancaria"></x-boton_editar>
                </td>
                <td>
                    <x-boton_eliminar :ruta="$rutaDelete" :elemento="$entidadbancaria"></x-boton_editar>
                </td>
            </tr>
            
            @endforeach  
                
    @endsection
</x-mostrarmenusapm>