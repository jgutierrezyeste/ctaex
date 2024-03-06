<link rel="stylesheet" href="{{ asset('menuhorizontal.css')}}">

<nav >
<ul>
    <li> <a href="{{ route('aseguradoras.index') }}"><h1>Aseguradoras</h1></a></li>
    <li> <a href="{{ route('centros.index') }}"><h1>Centros</h1></a></li>
   
    <li> <a href="{{ route('entidadesbancarias.index') }}"><h1>Entidades Bancarias</h1></a></li>
    
    <li> <h1>Aspectos judiciales:</h1>
        <ul style="--cantidad-items:4">
            <li> <a href="{{ route('juzgados.index') }}"><h1>Juzgados</h1></a></li>
           
      
            <li> <a href="{{ route('figuras.index') }}"><h1>Figuras</h1></a></li>
            <li> <a href="{{ route('procedimientosJudiciales.index') }}"><h1>Procedimientos Judiciales</h1></a></li>
            <li> <a href="{{ route('motivos.index') }}"><h1>Motivos</h1></a></li>
            
            
            
        </ul>
    </li>

    <li> <h1>Personal:</h1>
        <ul style="--cantidad-items:6">
            <li> <a href="{{ route('empleados.index') }}"><h1>Empleados</h1></a></li>
            <li> <a href="{{ route('segurosMedicos.index') }}"><h1>Seguros Médicos</h1></a></li>
           
            <li> <a href="{{ route('letrados.index') }}"><h1>Letrados</h1></a></li>
           
            <li> <a href="{{ route('trabajadoresSociales.index') }}"><h1>Ts Asignados</h1></a></li>
            <li> <a href="{{ route('iniciadorProcedimiento.index') }}"><h1>Iniciadores procedimientos</h1></a></li>
            <li> <a href="{{ route('relaciones.index') }}"><h1>Relaciones</h1> </a></li>
        </ul>
    </li>
     
    <li> <h1> Datos personales </h1>
        <ul style="--cantidad-items:5">
            <li> <a href="{{ route('nacionalidades.index') }}"><h1>Nacionalidades</h1></a></li>
            <li> <a href="{{ route('provincias.index') }}"><h1>Provincias</h1></a></li>
            <li> <a href="{{ route('sexo.index') }}"><h1>Sexos</h1></a></li>
            <li> <a href="{{ route('documentosIdentificativos.index') }}"><h1>Documentos Identificativos</h1></a></li>
            <li> <a href="{{ route('estado.index') }}"><h1>Estados</h1></a></li>
        </ul>
    </li>

    <li> <h1> Dependencias </h1>
        <ul style="--cantidad-items:4">
            <li> <a href="{{ route('gradosDependencia.index') }}"><h1>GradoDependencias</h1></a></li>
            <li> <a href="{{ route('nivelDependencias.index') }}"><h1>Nivel Dependencias</h1></a></li>
            <li> <a href="{{ route('serviciosDependencias.index') }}"><h1>Servicios Dependencias</h1></a></li>
            <li> <a href="{{ route('subtipoDependencias.index') }}"><h1>Subtipo Servicio Dependencias</h1></a></li>
        </ul>
    </li>
    <li> <h1> Patologias </h1>
        <ul style="--cantidad-items:2">
            <li> <a href="{{ route('patologiasConcretas.index') }}"><h1>Patologias Concretas</h1></a></li>
            <li> <a href="{{ route('patologiasGenerales.index') }}"><h1>Patologias Generales</h1></a></li>
        </ul>
    </li>

    <li> <h1> Prestaciones </h1>
        <ul style="--cantidad-items:2">
            <li> <a href="{{ route('prestacionDependencias.index') }}"><h1>Prestaciones Dependencias</h1></a></li>
            <li> <a href="{{ route('prestaciones.index') }}"><h1>Prestaciones</h1></a></li>    
        </ul>
    </li>
   
    <li> <a href="{{ route('opcionAutorizacion.index') }}"><h1>Opciones Autorizacion</h1></a></li>
    
    <li> <a href="{{ route('años.index') }}"><h1>Años</h1></a></li>
    
    <li> <a href="{{ route('regimenes.index') }}"><h1>Regimenes</h1></a></li>
    
    

</ul>
</nav>