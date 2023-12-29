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
    
    <table style="-moz-border-radius: 15px;
	FONT-FAMILY:   sans-serif, Arial,Verdana, Helvetica;
	font-size: 12px;
	color: black;
	border-style: solid;
	border-color: green;
	border-right-width: thin;
	border-left-width: thin;
	border-width: thin;
	background-color:lightcyan;
	padding-left : 5px;
	padding-right : 5px;" cellpadding="0" cellspacing="1" width="100%">
     <tbody><tr>     
       <td  align="center">
       	  <font face="Arial,Helvética" color="#005500" size="3">
		  <b> Comisión tutelar de adultos </b>
 	     </font>  
       </td>
     </tr>
    </tbody></table>

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