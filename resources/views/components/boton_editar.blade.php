@props(['ruta','elemento'])
<form method="GET" action="{{route($ruta,$elemento->id) }}">
    @csrf
    <input type="submit" value = "EDIT" />
</form>