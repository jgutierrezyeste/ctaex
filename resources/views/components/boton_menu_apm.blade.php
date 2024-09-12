@props(['menu','ruta'])

<form method="GET" action="{{route($ruta) }}">
    @csrf
    <div class="col-md-3">
    <input type="submit" value = "{{strtoupper($menu)}}" />
    </div>
</form>
