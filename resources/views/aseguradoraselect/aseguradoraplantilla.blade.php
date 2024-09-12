@php
$titulo="Aseguradoras";  
$rutaAniadir="aseguradoras.create"; 
$rutaEdicion="aseguradoras.edit";
$rutaRegreso="index_apm" ; 
$campos=['nombre','telefono1','telefono2'];

@endphp

<x-mostrarmenusapmselect :elementos="$aseguradoras" :titulo="$titulo" :rutaRegreso="$rutaRegreso" vista="aseguradoras.edit" :rutaAniadir="$rutaAniadir" :campos="$campos" :rutaEdicion="$rutaEdicion" >    


        @section('cuerpo')
            <script src="https://code.jquery.com/jquery-3.7.1.js"> 
            </script>



        <!-- FORMULARIO -->
        


        @endsection
</x-mostrarmenusapmselect>