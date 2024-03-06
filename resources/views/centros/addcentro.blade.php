@extends ('layouts.landing')
@section('title','Centros')
@section('subtitle','INSERCION DE CENTRO NUEVO')
@section('content')

<form method ="POST" action ="{{route('centros.store')}}">
    @csrf
    @component('_components.div')
        @slot('nombre_campo','nombre')
    @endcomponent
    
    @component('_components.div')
        @slot('nombre_campo','tipo_via')
    @endcomponent

    @component('_components.div')t
        @slot('nombre_campo','direccion')
    @endcomponent

    @component('_components.div')
        @slot('nombre_campo','numero')
    @endcomponent

    @component('_components.div')
        @slot('nombre_campo','planta')
    @endcomponent

    @component('_components.div')
        @slot('nombre_campo','poblacion')
    @endcomponent

    @component('_components.div')
        @slot('nombre_campo','provincia')
    @endcomponent

    @component('_components.div')
        @slot('nombre_campo','codigo_postal')
    @endcomponent

    @component('_components.div')
        @slot('nombre_campo','telefono')
    @endcomponent

    @component('_components.div')
        @slot('nombre_campo','telefono2')
    @endcomponent

    @component('_components.div')
        @slot('nombre_campo','fax')
    @endcomponent


    @component('_components.div')
    @slot('nombre_campo','fax2')
    @endcomponent  
    
    @component('_components.div')
        @slot('nombre_campo','correo_electronico')
    @endcomponent

    @component('_components.div')
        @slot('nombre_campo','observaciones')
    @endcomponent

    <div class="container">
    <input type="submit" value="Añadir Centro"/>
    </div>

    <a href="{{route('centros.index')}}"> Vuelta al listado </a>
</form>
@endsection