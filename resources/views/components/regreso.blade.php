@props(['ruta','regreso','vista'=>""])
<div align="center" >
<form method="GET" action="{{route($ruta,$vista) }}">
    @csrf
    <input type="submit" class="btn-regreso"  value = "{{$regreso}}" />
</form>
</div>

    
