<div class="login">
    <div class="misma_linea">
        @component('_components.user')
        @endcomponent
        <label style="width:50%"> Usuario </label>
        <input style="width:50%" type="text" name="Usuario"/><br/>
    </div>
    
    <div class="misma_linea">
        @component('_components.contraseña')
        @endcomponent
        <label style="width:50%"> Contraseña </label>
        <input style="width:50%" type="text" name="Contraseña"/><br/>
    </div>
    
    <div align="center" >
        <form method="GET" action="{{route('index_intranet') }}">
            @csrf
            <input type="submit" class="btn-login" value = "LOGIN" />
        </form>
</div>
</div>