<div class="login" align="center">
    <div class="misma_linea">
        @include('layouts._partials.user')
        <label style="width:50%"> Usuario </label>
        <input style="width:50%" type="text" name="Usuario"/><br/>
    </div>
    
    <div class="misma_linea">
        @include('layouts._partials.contraseña')
        <label style="width:50%"> Contraseña </label>
        <input style="width:50%" type="text" name="Contraseña"/><br/>
    </div>
    
    <div align="center" style="width:500px">
        <x-login  ruta="index_intranet"></x-login>
</div>
</div>