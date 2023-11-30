<div class="container">
    <label> {{ $nombre_campo }} </label>
    <input type="text" name="{{ $nombre_campo }}" /><br/>
</div>
@error ($nombre_campo)
    <p style ="color:red;">{{ $message }}</p>
@enderror


    