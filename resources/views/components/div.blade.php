@props(['nombreCampo'])
<div class="container" align="center">
    <label> {{ strtoupper($nombreCampo) }} </label>
    <input type="text" name="{{ $nombreCampo }}" /><br/>
</div>
@error ($nombreCampo)
    <p style ="color:red;">{{ $message }}</p>
@enderror


    