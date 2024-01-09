<!DOCTYPE html>
<html lang="en">
<head>
    @component('_components.cabecera_pagina')
    @endcomponent
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
   
</head>
<body>
    
    

    <table width="100%" border="0">
        <tbody>
            <tr>
                <td width="20%">
                    @include('layouts._partials.menuIntranet')  
                </td>
                <td width="60%" align ="center">
                    @component('_components.escudo_pagina_principal')
                    @endcomponent
                </td>
                <td widt="20%"></td>
    
    
    @include('layouts._partials.message')
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    @yield('subtitle')
    
     


</body>
</html>