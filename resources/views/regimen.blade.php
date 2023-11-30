<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regimen</title>
</head>
<body>
    <h1> Listado de regimen </h1>
    <ul>
    @foreach ($regimen as $reg)
        <li>
            
            {{ $reg->regimen }} - {{ $reg->codigo_regimen }}
            <a href="{{ route('edit_regimen',$reg->id)}}">EDIT</a> 
            
            <a href="{{ route('delete_regimen',$reg->id)}}">DELETE</a>

        </li>
        
    @endforeach
    </ul>
    <a href="{{ route('add_regimen') }}"> Add regimen </a>
    
</body>
</html>