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
    <div align="right">
    <x-cierre_sesion ruta="cerrar_sesion"></x-cierre_sesion>
    </div>
    <table width="100%" border="0">
        <tbody>
            <tr>
                <td width="60%">
                    @include('layouts._partials.menuIntranet')  
                </td>
                <td width="40%" >
                    @include('layouts._partials.escudo_pagina_principal')
                </td>
               
            </tr>
        </tbody>
    </table>

    
    @include('layouts._partials.message')
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    @yield('subtitle')
    
     


</body>
</html>