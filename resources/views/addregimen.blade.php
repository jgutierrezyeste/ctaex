<form method ="POST" action ="{{route('store_regimen')}}">
    @csrf
    <label> REGIMEN </label>
    <input type="text" name="alcance" /><br/>
    @error ('alcance')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    <label> Codigo_alcance </label>
    <input type="text" name="codigo_alcance" /><br/>
    
    @error ('codigo_alcance')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    <input type="submit" value="Crear Regimen"/>

</form>
    
