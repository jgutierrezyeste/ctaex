<form method ="POST" action ="{{route('update_regimen', $regimen->id)}}">
    
    @method('PUT')
    @csrf
    <label> REGIMEN </label>
    <input type="text" name="alcance" value="{{ $regimen->alcance }}"/><br/>
    
    @error ('alcance')
    <p style ="color:red;">{{ $message }}</p>
    @enderror
    <label> Codigo_alcance </label>
    <input type="text" name="codigo_alcance" value="{{ $regimen->codigo_alcance }}"/><br/>
    
    @error ('codigo_alcance')
    <p style ="color:red;">{{ $message }}</p>
    @enderror

    <input type="submit" value="Actualizar Regimen"/>

</form>
    