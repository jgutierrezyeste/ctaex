<?php

use App\Http\Controllers\AccesoController;
use App\Http\Controllers\ApmController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AseguradoraController;
use App\Http\Controllers\AutorizacionController;

use App\Http\Controllers\AñoController;
use App\Http\Controllers\CarpetaDecesoController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\DependenciaServicioSubtipoController;
use App\Http\Controllers\DependenciaServicioController;
use App\Http\Controllers\DocumentoIdentificativoController;

use App\Http\Controllers\EntidadBancariaController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\FiguraController;
use App\Http\Controllers\GradoDependenciaController;
use App\Http\Controllers\IniciadorProcedimientoController;
use App\Http\Controllers\JuzgadoController;
use App\Http\Controllers\LetradoController;
use App\Http\Controllers\MotivoController;
use App\Http\Controllers\NacionalidadController;
use App\Http\Controllers\NivelDependenciaController;
use App\Http\Controllers\OpcionAutorizacionController;
use App\Http\Controllers\RelacionController;
use App\Http\Controllers\PatologiaConcretaController;
use App\Http\Controllers\PatologiaGeneralController;
use App\Http\Controllers\PrestacionController;
use App\Http\Controllers\PrestacionDependenciaController;
use App\Http\Controllers\ProcedimientoJudicialController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\RegimenController;

use App\Http\Controllers\SeguroMedicoController;
use App\Http\Controllers\SexoController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\TrabajadorSocialController;
use App\Http\Controllers\IntranetController;
use App\Http\Controllers\DefensaJudicialController;
use App\Http\Controllers\ResolucionController;
use App\Http\Controllers\TutelaController;
use App\Http\Controllers\CuratelaController;
use App\Http\Controllers\AdministracionBienController;
use App\Http\Controllers\TipoViaController;

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ModoResolucionController;
use App\Http\Controllers\RepresentanteController;
use App\Http\Controllers\TipoRegimenController;
use App\Http\Controllers\TipoRendicionAnualController;
use App\Http\Controllers\TipoRestitucionController;
use App\Models\TipoRestitucion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\DependenciaServicio;
use App\Models\DocumentoIdentificativo;
use App\Models\GradoDependencia;
use App\Models\OpcionAutorizacion;
use App\Models\Regimen;
use App\Models\TrabajadorSocial;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*relacionado con <menu></menu
*/
Route::get('/',[MenuController::class,'menus'])->name('menu_vertical');
//Route::view('/','welcome_menu');
/*nuevas cositas 16042024*/
Route::get('/principal',[AccesoController::class,'acceder'])->name('acceso_aplicativo');
Route::post('/iniciarsesion',[AccesoController::class,'iniciar_sesion'])->name('iniciar_sesion');
Route::get('/cerrarsession',[AccesoController::class,'cerrar_sesion'])->name('cerrar_sesion');
Route::get('/indiceapm',[ApmController::class,'index'])->middleware('auth')->name('index_apm');
Route::get('/indiceintranet',[IntranetController::class,'index'])->middleware('auth')->name('index_intranet');


//Route::view('/','inicio')->name('principal');



Route::get('/administrador',[ApmController::class,'autenticar'])->name('autenticacion_apm');

/*nuevo*/
//Route::post('/iniciasesion',[ApmController::class,'login2'])->name('login_apm');

Route::get('/acceso_apm',[ApmController::class,'acceder'])->name('acceso_apm');
Route::view('/registro','apm.registrousuario')->name('vista_registro');
Route::view('/login','apm.autenticacionapm')->name('autenticacion_apm');




Route::post('/registrarse',[ApmController::class,'registrar'])->name('registrar_apm');
Route::get('/salir',[ApmController::class,'logout2'])->name('salir_apm');

Route::get('/user',[IntranetController::class,'autenticar'])->name('autenticacion_intranet');
/** */
Route::resource('/relaciones',RelacionController::class);
Route::resource('/aseguradoras',AseguradoraController::class)->middleware('auth');
Route::get('/asegurador',[AseguradoraController::class,'getaseguradora'])->middleware('auth');
Route::resource('/autorizacion',AutorizacionController::class)->middleware('auth');
Route::resource('/entidadesbancarias',EntidadBancariaController::class)->middleware('auth');
Route::resource('/años',AñoController::class)->middleware('auth');
Route::resource('/empleados',EmpleadoController::class)->middleware('auth');

Route::resource('/carpetas',CarpetaDecesoController::class)->middleware('auth');
Route::resource('/centros',CentroController::class)->middleware('auth');
Route::resource('/serviciosDependencias',DependenciaServicioController::class)->middleware('auth');
Route::resource('/subtipoDependencias',DependenciaServicioSubtipoController::class)->middleware('auth');
Route::resource('/documentosIdentificativos',DocumentoIdentificativoController::class)->middleware('auth');
Route::resource('/figuras',FiguraController::class)->middleware('auth');
Route::resource('/gradosDependencia',GradoDependenciaController::class)->middleware('auth');
Route::resource('/iniciadorProcedimiento',IniciadorProcedimientoController::class)->middleware('auth');
Route::resource('/juzgados',JuzgadoController::class)->middleware('auth');
Route::resource('/letrados',LetradoController::class)->middleware('auth');
Route::resource('/resolucionModos',ModoResolucionController::class)->middleware('auth');
Route::resource('/motivos',MotivoController::class)->middleware('auth');
Route::resource('/nacionalidades',NacionalidadController::class)->middleware('auth');
Route::resource('/nivelDependencias',NivelDependenciaController::class)->middleware('auth');
Route::resource('/opcionAutorizacion',OpcionAutorizacionController::class)->middleware('auth');
Route::resource('/patologiasConcretas',PatologiaConcretaController::class)->middleware('auth');
Route::resource('/patologiasGenerales',PatologiaGeneralController::class)->middleware('auth');
Route::resource('/prestaciones',PrestacionController::class)->middleware('auth');
Route::resource('/prestacionDependencias',PrestacionDependenciaController::class)->middleware('auth');
Route::resource('/procedimientosJudiciales',ProcedimientoJudicialController::class)->middleware('auth');
Route::resource('/provincias',ProvinciaController::class)->middleware('auth');

Route::resource('/representantes',RepresentanteController::class)->middleware('auth');
Route::resource('/segurosMedicos',SeguroMedicoController::class)->middleware('auth');
Route::resource('/sexo',SexoController::class)->middleware('auth');
Route::resource('/estados',EstadoController::class)->middleware('auth');
Route::resource('/trabajadoresSociales',TrabajadorSocialController::class)->middleware('auth');
Route::resource('/tiposVia',TipoViaController::class)->middleware('auth');
Route::resource('/tiposRestitucion',TipoRestitucionController::class)->middleware('auth');
Route::resource('/tiposRendicionAnual',TipoRendicionAnualController::class)->middleware('auth');
Route::resource('/tiposRegimen',TipoRegimenController::class)->middleware('auth');

Route::resource('/regimenes',RegimenController::class)->middleware('auth');
Route::resource('/expedientes',ExpedienteController::class)->middleware('auth');
Route::resource('/defensasjudiciales',DefensaJudicialController::class)->middleware('auth');
Route::resource('/resoluciones',ResolucionController::class)->middleware('auth');

Route::get('/busqueda/{vista}',[ExpedienteController::class,'busqueda'])->name('expedientes.busqueda')->middleware('auth');
Route::get('/consultarExpedientes/{vista}',[ExpedienteController::class,'consultar'])->name('expedientes.consultar')->middleware('auth');
Route::get('/modificarExpedientes/{vista}',[ExpedienteController::class,'modificar'])->name('expedientes.modificar')->middleware('auth');
Route::get('/datosExpediente/{vistadatos}/{idexpte}',[ExpedienteController::class,'mostrardatos'])->name('expediente.datos')->middleware('auth');
Route::get('/datosExtendidosExpediente/{vistadatos}/{idexpte}',[ExpedienteController::class,'obtener_datos'])->name('expediente.datosextendidos')->middleware('auth');
Route::get('/datospersonales/{vista}/{id}',[ExpedienteController::class,'obtener_datos'])->name('expedientes.datospersonales')->middleware('auth');
Route::get('/datosbancarios/{vista}/{id}',[ExpedienteController::class,'obtener_datos'])->name('expedientes.datosbancarios')->middleware('auth');
Route::get('/datosresidencia/{vista}/{id}',[ExpedienteController::class,'obtener_datos'])->name('expedientes.datosresidencia')->middleware('auth');
Route::get('/datosinmuebles/{vista}/{id}',[ExpedienteController::class,'obtener_datos'])->name('expedientes.datosinmuebles')->middleware('auth');

Route::get('/datospensiones/{vista}/{id}',[ExpedienteController::class,'obtener_datos'])->name('expedientes.datospensiones')->middleware('auth');
Route::get('/datosrepresentantes/{vista}/{id}',[ExpedienteController::class,'obtener_datos'])->name('expedientes.datosrepresentantes')->middleware('auth');
Route::get('/datossanitarios/{vista}/{id}',[ExpedienteController::class,'obtener_datos'])->name('expedientes.datossanitarios')->middleware('auth');
Route::get('/datosoficios/{vista}/{id}',[ExpedienteController::class,'obtener_datos'])->name('expedientes.datosoficios')->middleware('auth');
Route::get('/datosinventarios/{vista}/{id}',[ExpedienteController::class,'obtener_datos'])->name('expedientes.datosinventarios')->middleware('auth');
Route::get('/datosgastos/{vista}/{id}',[ExpedienteController::class,'obtener_datos'])->name('expedientes.datosgastos')->middleware('auth');
Route::get('/datosingresos/{vista}/{id}',[ExpedienteController::class,'obtener_datos'])->name('expedientes.datosingresos')->middleware('auth');


//Route::get('/oficiosExpediente',[ExpedienteController::class,'oficios'])->name('expedientes.oficios');
//Route::get('/oficiostutorExpediente/{vista}',[ExpedienteController::class,'oficios'])->name('expedientes.oficiostutor');
//Route::get('/oficiosdefensorjudicialExpediente/{vista}',[ExpedienteController::class,'oficios'])->name('expedientes.oficiosdefensorjudicial');
//Route::get('/oficioscuradorExpediente/{vista}',[ExpedienteController::class,'oficios'])->name('expedientes.oficioscurador');
Route::get('/buscar/{id}',[ExpedienteController::class,'buscar'])->name('expedientes.buscar')->middleware('auth');
Route::get('/oficiosExpediente/{vista}',[ExpedienteController::class,'oficios'])->name('expedientes.oficios')->middleware('auth');
Route::get('/inventariosExpediente/{vista}',[ExpedienteController::class,'inventarios'])->name('expedientes.inventarios')->middleware('auth');

//Route::get('/busquedaModificar',[ExpedienteController::class,'busquedaModificar'])->name('expedientes.busquedaModificar');
//Route::get('/busquedaConsulta',[ExpedienteController::class,'busquedaConsulta'])->name('expedientes.busquedaConsulta');


/*tutelas*/
Route::get('/tutelas/busquedaTutela/{vista}',[TutelaController::class,'busqueda'])->name('tutelas.busqueda')->middleware('auth');
Route::get('/consultarTutela/{vista}',[TutelaController::class,'consultar'])->name('tutelas.consultar')->middleware('auth');
Route::get('/modificarTutela/{vista}',[TutelaController::class,'modificar'])->name('tutelas.modificar')->middleware('auth');
Route::get('/inventariosTutela/{vista}',[TutelaController::class,'inventarios'])->name('tutelas.inventarios')->middleware('auth');
Route::get('/oficiosTutela/{vista}',[TutelaController::class,'oficios'])->name('tutelas.oficios')->middleware('auth');
Route::resource('/tutelas',TutelaController::class)->middleware('auth');

/*curatelas*/
Route::get('/curatelas/busquedaCuratela/{vista}',[CuratelaController::class,'busqueda'])->name('curatelas.busqueda')->middleware('auth');
Route::get('/consultarCuratela/{vista}',[CuratelaController::class,'consultar'])->name('curatelas.consultar')->middleware('auth');
Route::get('/modificarCuratela/{vista}',[CuratelaController::class,'modificar'])->name('curatelas.modificar')->middleware('auth');
Route::get('/oficiosCuratela/{vista}',[CuratelaController::class,'oficios'])->name('curatelas.oficios')->middleware('auth');
Route::get('/inventarioCuratela/{vista}',[CuratelaController::class,'inventarios'])->name('curatelas.inventarios')->middleware('auth');
Route::resource('/curatelas',CuratelaController::class)->middleware('auth');

/*adminsitracion de bienes*/
Route::get('/adminitracionbienes/busquedaAdmBien/{vista}',[AdministracionBienController::class,'busqueda'])->name('administracionbienes.busqueda')->middleware('auth');
Route::get('/consultarAdmBienes/{vista}',[AdministracionBienController::class,'consultar'])->name('administracionbienes.consultar')->middleware('auth');
Route::get('/modificarAdmBienes/{vista}',[AdministracionBienController::class,'modificar'])->name('administracionbienes.modificar')->middleware('auth');
Route::get('/oficiosAdmBienes/{vista}',[AdministracionBienController::class,'oficios'])->name('administracionbienes.oficios')->middleware('auth');
Route::get('/inventarioAdmBienes/{vista}',[AdministracionBienController::class,'inventarios'])->name('administracionbienes.inventarios')->middleware('auth');
Route::resource('/administracionbienes',AdministracionBienController::class)->middleware('auth');

Auth::routes();
Route::get('/relacionselect/{id}',[RelacionController::class,'getRelacionById'])->name('seleccionrelacion')->middleware('auth');
Route::put('/relacionesactualizar',[RelacionController::class,'actualizar'])->name('relaciones.actualizar')->middleware('auth');
Route::delete('/relacionesEliminar',[RelacionController::class,'eliminar'])->name('relaciones.eliminar')->middleware('auth');

Route::put('/procedimientosJudicialesActualizar',[ProcedimientoJudicialController::class,'actualizar'])->name('procedimientosJudiciales.actualizar')->middleware('auth');
Route::get('/procedimientos/{id}', [ProcedimientoJudicialController::class,'getProcedimientoById'])->middleware('auth');
Route::delete('/procedimientosEliminar',[ProcedimientoJudicialController::class,'eliminar'])->name('procedimientosJudiciales.eliminar')->middleware('auth');


Route::put('/centrosActualizar',[CentroController::class,'actualizar'])->name('centros.actualizar')->middleware('auth');
Route::get('/centrosId/{id}', [CentroController::class,'getCentroById'])->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::delete('/centrosEliminar',[CentroController::class,'eliminar'])->name('centros.eliminar')->middleware('auth');

Route::put('/entidadesBancariasActualizar',[EntidadBancariaController::class,'actualizar'])->name('entidadesbancarias.actualizar')->middleware('auth');
Route::get('/entidadesBancariasId/{id}', [EntidadBancariaController::class,'getEntidadBancariaById'])->middleware('auth');
Route::delete('/entidadesBancariasEliminar',[EntidadBancariaController::class,'eliminar'])->name('entidadesbancarias.eliminar')->middleware('auth');

Route::put('/aseguradorasActualizar',[AseguradoraController::class,'actualizar'])->name('aseguradoras.actualizar')->middleware('auth');
Route::get('/aseguradorasId/{id}', [AseguradoraController::class,'getAseguradoraById'])->middleware('auth');
Route::delete('/aseguradorasEliminar',[AseguradoraController::class,'eliminar'])->name('aseguradoras.eliminar')->middleware('auth');

Route::put('/juzgadosActualizar',[JuzgadoController::class,'actualizar'])->name('juzgados.actualizar')->middleware('auth');
Route::get('/juzgadosId/{id}', [JuzgadoController::class,'getJuzgadoById'])->middleware('auth');
Route::delete('/juzagosEliminar',[JuzgadoController::class,'eliminar'])->name('juzgados.eliminar')->middleware('auth');

Route::put('/iniciadorProcedimientoActualizar',[IniciadorProcedimientoController::class,'actualizar'])->name('iniciadorProcedimiento.actualizar')->middleware('auth');
Route::get('/iniciadorProcedimientoId/{id}', [IniciadorProcedimientoController::class,'getIniciadorProcedimientoById'])->middleware('auth');
Route::delete('/iniciadorProcedimientoEliminar',[IniciadorProcedimientoController::class,'eliminar'])->name('iniciadorProcedimiento.eliminar')->middleware('auth');

Route::put('/figurasActualizar',[FiguraController::class,'actualizar'])->name('figuras.actualizar')->middleware('auth');
Route::get('/figurasId/{id}', [FiguraController::class,'getFiguraById'])->middleware('auth');
Route::delete('/figurasEliminar',[FiguraController::class,'eliminar'])->name('figuras.eliminar')->middleware('auth');


Route::put('/tipoRestitucionActualizar',[TipoRestitucionController::class,'actualizar'])->name('tiposRestitucion.actualizar')->middleware('auth');
Route::get('/tiposRestitucionId/{id}', [TipoRestitucionController::class,'getTipoRestitucionById'])->middleware('auth');
Route::delete('/tiposRestitucionEliminar',[TipoRestitucionController::class,'eliminar'])->name('tiposRestitucion.eliminar')->middleware('auth');

Route::put('/resolucionModosActualizar',[ModoResolucionController::class,'actualizar'])->name('resolucionModos.actualizar')->middleware('auth');
Route::get('/resolucionModosId/{id}', [ModoResolucionController::class,'getModoResolucionById'])->middleware('auth');
Route::delete('/resolucionModosEliminar',[ModoResolucionController::class,'eliminar'])->name('resolucionModos.eliminar')->middleware('auth');

Route::put('/tiposRendicionAnualActualizar',[TipoRendicionAnualController::class,'actualizar'])->name('tiposRendicionAnual.actualizar')->middleware('auth');
Route::get('/tiposRendicionAnualId/{id}', [TipoRendicionAnualController::class,'getTipoRendicionAnualById'])->middleware('auth');
Route::delete('/tiposRendicionAnuealEliminar',[TipoRendicionAnualController::class,'eliminar'])->name('tiposRendicionAnual.eliminar')->middleware('auth');


Route::put('/empleadosActualizar',[EmpleadoController::class,'actualizar'])->name('empleados.actualizar')->middleware('auth');
Route::get('/empleadosId/{id}', [EmpleadoController::class,'getEmpleadoById'])->middleware('auth');
Route::delete('/empleadosEliminar',[EmpleadoController::class,'eliminar'])->name('empleados.eliminar')->middleware('auth');

Route::put('/segurosMedicosActualizar',[SeguroMedicoController::class,'actualizar'])->name('segurosMedicos.actualizar')->middleware('auth');
Route::get('/segurosMedicosId/{id}', [SeguroMedicoController::class,'getSeguroMedicoById'])->middleware('auth');
Route::delete('/segurosMedicosEliminar',[SeguroMedicoController::class,'eliminar'])->name('segurosMedicos.eliminar')->middleware('auth');

Route::put('/nacionalidadesActualizar',[NacionalidadController::class,'actualizar'])->name('nacionalidades.actualizar')->middleware('auth');
Route::get('/nacionalidadesId/{id}', [NacionalidadController::class,'getNacionalidadById'])->middleware('auth');
Route::delete('/nacionalidadesEliminar',[NacionalidadController::class,'eliminar'])->name('nacionalidades.eliminar')->middleware('auth');

Route::put('/provinciasActualizar',[ProvinciaController::class,'actualizar'])->name('provincias.actualizar')->middleware('auth');
Route::get('/provinciasId/{id}', [ProvinciaController::class,'getProvinciaById'])->middleware('auth');
Route::delete('/provinciasEliminar',[ProvinciaController::class,'eliminar'])->name('provincias.eliminar')->middleware('auth');

Route::put('/sexosActualizar',[SexoController::class,'actualizar'])->name('sexo.actualizar')->middleware('auth');
Route::get('/sexosId/{id}', [SexoController::class,'getSexoById'])->middleware('auth');
Route::delete('/sexosEliminar',[SexoController::class,'eliminar'])->name('sexo.eliminar')->middleware('auth');

Route::put('/documentosIdentificativosActualizar',[DocumentoIdentificativoController::class,'actualizar'])->name('documentosIdentificativos.actualizar')->middleware('auth');
Route::get('/documentosIdentificativosId/{id}', [DocumentoIdentificativoController::class,'getDocumentoIdentificativoById'])->middleware('auth');
Route::delete('/documentosIdentificativosEliminar',[DocumentoIdentificativoController::class,'eliminar'])->name('documentosIdentificativos.eliminar')->middleware('auth');

Route::put('/estadosActualizar',[EstadoController::class,'actualizar'])->name('estados.actualizar')->middleware('auth');
Route::get('/estadosId/{id}', [EstadoController::class,'getEstadoById'])->middleware('auth');
Route::delete('/estadosEliminar',[EstadoController::class,'eliminar'])->name('estados.eliminar')->middleware('auth');

Route::put('/tiposViaActualizar',[TipoViaController::class,'actualizar'])->name('tiposVia.actualizar')->middleware('auth');
Route::get('/tiposViaId/{id}', [TipoViaController::class,'getTipoViaById'])->middleware('auth');
Route::delete('/tiposViaEliminar',[TipoViaController::class,'eliminar'])->name('tiposVia.eliminar')->middleware('auth');

Route::put('/gradosDependenciaActualizar',[GradoDependenciaController::class,'actualizar'])->name('gradosDependencia.actualizar')->middleware('auth');
Route::get('/gradosDependenciaId/{id}', [GradoDependenciaController::class,'getGradoDependenciaById'])->middleware('auth');
Route::delete('/gradosDependenciaEliminar',[GradoDependenciaController::class,'eliminar'])->name('gradosDependencia.eliminar')->middleware('auth');


Route::put('/nivelDependenciasActualizar',[NivelDependenciaController::class,'actualizar'])->name('nivelDependencias.actualizar')->middleware('auth');
Route::get('/nivelDependenciasId/{id}', [NivelDependenciaController::class,'getNivelDependenciaById'])->middleware('auth');
Route::delete('/nivelDependenciasEliminar',[NivelDependenciaController::class,'eliminar'])->name('nivelDependencias.eliminar')->middleware('auth');

Route::put('/serviciosDependenciasActualizar',[DependenciaServicioController::class,'actualizar'])->name('serviciosDependencias.actualizar')->middleware('auth');
Route::get('/serviciosDependenciasId/{id}', [DependenciaServicioController::class,'getServicioDependenciaById'])->middleware('auth');
Route::delete('/serviciosDependenciasEliminar',[DependenciaServicioController::class,'eliminar'])->name('serviciosDependencias.eliminar')->middleware('auth');

Route::put('/subtipoDependenciasActualizar',[DependenciaServicioSubtipoController::class,'actualizar'])->name('subtipoDependencias.actualizar')->middleware('auth');
Route::get('/subtipoDependenciasId/{id}', [DependenciaServicioSubtipoController::class,'getServicioDependenciaSubtipoById'])->middleware('auth');
Route::delete('/subtipoDependenciasEliminar',[DependenciaServicioSubtipoController::class,'eliminar'])->name('subtipoDependencias.eliminar')->middleware('auth');


Route::put('/patologiasConcretasActualizar',[PatologiaConcretaController::class,'actualizar'])->name('patologiasConcretas.actualizar')->middleware('auth');
Route::get('/patologiasConcretasId/{id}', [PatologiaConcretaController::class,'getPatologiaConcretaById'])->middleware('auth');
Route::delete('/patologiasConcretasEliminar',[PatologiaConcretaController::class,'eliminar'])->name('patologiasConcretas.eliminar')->middleware('auth');

Route::put('/patologiasGeneralesActualizar',[PatologiaGeneralController::class,'actualizar'])->name('patologiasGenerales.actualizar')->middleware('auth');
Route::get('/patologiasGeneralesId/{id}', [PatologiaGeneralController::class,'getPatologiaGeneralById'])->middleware('auth');
Route::delete('/patologiasGeneralesEliminar',[PatologiaGeneralController::class,'eliminar'])->name('patologiasGenerales.eliminar')->middleware('auth');

Route::put('/prestacionDependenciasActualizar',[PrestacionDependenciaController::class,'actualizar'])->name('prestacionDependencias.actualizar')->middleware('auth');
Route::get('/prestacionDependenciasId/{id}', [PrestacionDependenciaController::class,'getPrestacionDependenciaById'])->middleware('auth');
Route::delete('/prestacionDependenciasEliminar',[PrestacionDependenciaController::class,'eliminar'])->name('prestacionDependencias.eliminar')->middleware('auth');

Route::put('/prestacionesActualizar',[PrestacionController::class,'actualizar'])->name('prestaciones.actualizar')->middleware('auth');
Route::get('/prestacionesId/{id}', [PrestacionController::class,'getPrestacionById'])->middleware('auth');
Route::delete('/prestacionesEliminar',[PrestacionController::class,'eliminar'])->name('prestaciones.eliminar')->middleware('auth');

Route::put('/opcionAutorizacionActualizar',[OpcionAutorizacionController::class,'actualizar'])->name('opcionAutorizacion.actualizar')->middleware('auth');
Route::get('/opcionAutorizacionId/{id}', [OpcionAutorizacionController::class,'getOpcionAutorizacionById'])->middleware('auth');
Route::delete('/opcionAutorizacionEliminar',[OpcionAutorizacionController::class,'eliminar'])->name('opcionAutorizacion.eliminar')->middleware('auth');


Route::put('/añosActualizar',[AñoController::class,'actualizar'])->name('años.actualizar')->middleware('auth');
Route::get('/añosId/{id}', [AñoController::class,'getAñoById'])->middleware('auth');
Route::delete('/añosEliminar',[AñoController::class,'eliminar'])->name('años.eliminar')->middleware('auth');

Route::put('/tiposRegimenActualizar',[TipoRegimenController::class,'actualizar'])->name('tiposRegimen.actualizar')->middleware('auth');
Route::get('/tiposRegimenId/{id}', [TipoRegimenController::class,'getTipoRegimenById'])->middleware('auth');
Route::delete('/tiposRegimenEliminar',[TipoRegimenController::class,'eliminar'])->name('tiposRegimen.eliminar')->middleware('auth');

Route::put('/carpetasActualizar',[CarpetaDecesoController::class,'actualizar'])->name('carpetas.actualizar')->middleware('auth');
Route::get('/carpetasId/{id}', [CarpetaDecesoController::class,'getCarpetaDecesoById'])->middleware('auth');
Route::delete('/carpetasEliminar',[CarpetaDecesoController::class,'eliminar'])->name('carpetas.eliminar')->middleware('auth');

Route::put('/regimenesActualizar',[RegimenController::class,'actualizar'])->name('regimenes.actualizar')->middleware('auth');
Route::get('/regimenesId/{id}', [RegimenController::class,'getRegimenById'])->middleware('auth');
Route::delete('/regimenesEliminar',[RegimenController::class,'eliminar'])->name('regimenes.eliminar')->middleware('auth');

Route::put('/letradosActualizar',[LetradoController::class,'actualizar'])->name('letrados.actualizar')->middleware('auth');
Route::get('/letradosId/{id}', [LetradoController::class,'getLetradoById'])->middleware('auth');
Route::delete('/letradosEliminar',[LetradoController::class,'eliminar'])->name('letrados.eliminar')->middleware('auth');

Route::put('/motivosActualizar',[MotivoController::class,'actualizar'])->name('motivos.actualizar')->middleware('auth');
Route::get('/motivosId/{id}', [MotivoController::class,'getMotivoById'])->middleware('auth');
Route::delete('/motivosEliminar',[MotivoController::class,'eliminar'])->name('motivos.eliminar')->middleware('auth');

Route::put('/autorizacionActualizar',[AutorizacionController::class,'actualizar'])->name('autorizacion.actualizar')->middleware('auth');
Route::get('/autorizacionId/{id}', [AutorizacionController::class,'getAutorizacionById'])->middleware('auth');
Route::delete('/autorizacionEliminar',[AutorizacionController::class,'eliminar'])->name('autorizacion.eliminar')->middleware('auth');

Route::put('/trabajadoresSocialesActualizar',[TrabajadorSocialController::class,'actualizar'])->name('trabajadoresSociales.actualizar')->middleware('auth');
Route::get('/trabajadoresSocialesId/{id}', [TrabajadorSocialController::class,'getTrabajadorSocialById'])->middleware('auth');
Route::delete('/trabajadoresSocialesEliminar',[TrabajadorSocialController::class,'eliminar'])->name('trabajadoresSociales.eliminar')->middleware('auth');

