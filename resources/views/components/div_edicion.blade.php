@props(['nombreCampo','nombreModelo'])

<div class="container">
    <label> {{ $nombreCampo}}  </label>
    <input type="text" name={{ $nombreCampo }} value="{{ $nombreModelo->$nombreCampo }}"/>
</div>
    @error ($nombreCampo)
    <p style ="color:red;">{{ $message }}</p>
    @enderror


   