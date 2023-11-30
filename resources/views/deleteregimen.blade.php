<form method ="POST" action ="{{route('destroy_regimen', $regimen->id)}}">
    
    @method('DELETE')
    @csrf
    <label> REGIMEN </label>
    <input type="text" name="alcance" value="{{ $regimen->alcance }}"/><br/>
    <label> Codigo_alcance </label>
    <input type="text" name="codigo_alcance" value="{{ $regimen->codigo_alcance }}"/><br/>

    <input type="submit" value="ELIMINAR DEFINITIVAMENTE"/>

</form>