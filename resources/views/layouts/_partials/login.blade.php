<div class="login">
    <div class="misma_linea">
        @component('_components.user')
        @endcomponent
        <label> Usuario </label>
        <input type="text" name="Usuario"/><br/>
    </div>
    
    <div class="misma_linea">
        @component('_components.contraseña')
        @endcomponent
        <label> Contraseña </label>
        <input type="text" name="Contraseña"/><br/>
    </div>
    
    <div align="center">
        <form method="GET" action="{{route('index_apm') }}">
            @csrf
            <input type="submit" class="btn-login" value = "LOGIN" />
        </form>
    </div>
</div>