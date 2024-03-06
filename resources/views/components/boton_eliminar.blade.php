@props(['ruta','elemento'])
<form method="POST" action="{{route($ruta,$elemento->id) }}">
    @csrf
    @method('DELETE')
    <input type="submit" value = "DELETE" />
    </form>