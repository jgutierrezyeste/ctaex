
<form method="GET" action="{{route($ruta) }}">
    @csrf
    <img src="{{asset('assets/img/boton_inicio.png')}}" alt="75" width="75">
    <input type="submit" class="btn-regreso" align="center" value = "{{$regreso}}" />
</form>


    
 