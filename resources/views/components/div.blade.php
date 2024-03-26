@props(['nombreCampo'])
<div class="container">
    <label> {{ strtoupper($nombreCampo) }} </label>
    <input type="text" name="{{ $nombreCampo }}" /><br/>
</div>
@error ($nombreCampo)
    <p style ="color:red;">{{ $message }}</p>
@enderror


    