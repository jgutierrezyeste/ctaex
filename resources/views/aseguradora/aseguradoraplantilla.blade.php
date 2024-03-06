@php
    $ruta_regreso="index_apm";
    $subtitulo="Aseguradoras";

@endphp
<x-plantillamenusapm :titulo="$subtitulo" :rutaRegreso="$rutaregreso"></x-plantillamenusapm>
@section ('cabecera')
    <x-td_variable campo_propio="nombre" ></x-td_variable>
    <x-td_variable campo_propio="telefono_avisos"></x-td_variable>
    <x-td_variable campo_propio="telefono_avisos2"></x-td_variable>
    <x-td_variable campo_propio="" tipo="columna_botones"></x-td_variable>
    
@endsection
@section('cuerpo')
    @php
    $rutaEdicion="aseguradoras.edit";
    $rutaDelete="aseguradoras.destroy";    
    @endphp
        @foreach ($aseguradoras as $aseguradora)  
        <tr> 
            <td class="columna_datos">{{ $aseguradora->nombre }}</td>
            <td class="columna_datos">{{ $aseguradora->telefono_avisos }}</td>
            <td class="columna_datos">{{ $aseguradora->telefono_avisos2 }}</td>
            <td>
                <x-boton_editar :ruta="$rutaEdicion" :elemento="$aseguradora"></x-boton_editar>
            </td>
            <td>
                <x-boton_eliminar :ruta="$rutaDelete" :elemento="$aseguradora"></x-boton_editar>
            </td>
        </tr>
        @endforeach    
@endsection