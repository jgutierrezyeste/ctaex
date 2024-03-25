@props(['nombreCampo','nombreModelo'])
@php
    $archivo=fopen("div_edicon.txt","w+");
    fwrite($archivo,$nombreCampo);
    fwrite($archivo,$nombreModelo);
@endphp
<div class="container">
    <label> {{ $nombreCampo}}  </label>
    <input type="text" name={{ $nombreCampo }} value="{{ $nombreModelo->$nombreCampo }}"/>
</div>
    @error ($nombreCampo)
    <p style ="color:red;">{{ $message }}</p>
    @enderror


   