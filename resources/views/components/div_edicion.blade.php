@props(['nombreCampo','nombreModelo'])

<div class="container" align="center">
    <label> {{ strtoupper($nombreCampo) }} </label>
    <input type="text"  name={{ $nombreCampo }} value="{{ $nombreModelo->$nombreCampo }}"  align="left"/>
</div>
    @error ($nombreCampo)
    <p style ="color:red;">{{ $message }}</p>
    @enderror


   