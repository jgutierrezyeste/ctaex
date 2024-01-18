<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts._partials.cabecera_pagina')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
   
</head>
<body>
    @include('layouts._partials.message')
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    @yield('subtitle')
    
    @yield('content')
    


</body>
</html>