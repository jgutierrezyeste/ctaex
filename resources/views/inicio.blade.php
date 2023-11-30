<form method ="GET" action ="{{route('index_apm')}}">
    @csrf
    <label> INICIO </label>
    
    <div class="container">
    <input type="submit" value="PANEL ADMINISTRACION"/>
    </div>
</form>

<form method ="GET" action ="{{route('index_intranet')}}">
    @csrf
    <label> INICIO INTRANET</label>
    
    <div class="container">
    <input type="submit" value="PAGINA INTRANET"/>
    </div>
</form>