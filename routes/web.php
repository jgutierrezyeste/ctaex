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
use App\Http\Controllers\DependenciaSevicioController;
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
Route::resource('/serviciosDependencias',DependenciaSevicioController::class)->middleware('auth');
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
//Route::get('/oficiosExpediente',[ExpedienteController::class,'oficios'])->name('expedientes.oficios');
//Route::get('/oficiostutorExpediente/{vista}',[ExpedienteController::class,'oficios'])->name('expedientes.oficiostutor');
//Route::get('/oficiosdefensorjudicialExpediente/{vista}',[ExpedienteController::class,'oficios'])->name('expedientes.oficiosdefensorjudicial');
//Route::get('/oficioscuradorExpediente/{vista}',[ExpedienteController::class,'oficios'])->name('expedientes.oficioscurador');
Route::get('/buscar/{id}',[ExpedienteController::class,'buscar'])->name('expedientes.buscar')->middleware('auth');
Route::get('/oficiosExpediente/{vista}',[ExpedienteController::class,'oficios'])->name('expedientes.oficios')->middleware('auth');
Route::get('/inventariosExpediente/{vista}',[ExpedienteController::class,'inventarios'])->name('expedientes.inventarios')->middleware('auth');

//Route::get('/busquedaModificar',[ExpedienteController::class,'busquedaModificar'])->name('expedientes.busquedaModificar');
//Route::get('/busquedaConsulta',[ExpedienteController::class,'busquedaConsulta'])->name('expedientes.busquedaConsulta');
Route::get('/busqueda/{vista}',[ExpedienteController::class,'busqueda'])->name('expedientes.busqueda')->middleware('auth');

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


