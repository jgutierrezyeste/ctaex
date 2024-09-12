@props(['nombreCampo','nombreModelo'])
@php
    $archivo=fopen('edicion.txt',"w+");
    fwrite($archivo,$nombreCampo.PHP_EOL);
    fwrite($archivo,$nombreModelo.PHP_EOL);
@endphp
<div class="container" align="center">
    <label font-size="2"> {{ strtoupper($nombreCampo) }} </label>
    <input type="text"  name={{ $nombreCampo }} value="{{ $nombreModelo->$nombreCampo }}"  align="left"/>
</div>
    @error ($nombreCampo)
    <p style ="color:red;">{{ $message }}</p>
    @enderror


   