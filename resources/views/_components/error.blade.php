@include('layouts._partials.message')
@error ({{ $nombre_error}})
    <p style ="color:red;">{{ $message }}</p>
@enderror