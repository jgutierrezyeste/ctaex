<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

Route::view('/','inicio')->name('principal');
//Route::view('/menus','welcome_menu')->name('bienvenida');
//Route::get('/menus',[MenuController::class,'menus'])->name('bienvenida');
Route::get('/indiceapm',[ApmController::class,'index'])->name('index_apm');
Route::get('/indiceintranet',[IntranetController::class,'index'])->name('index_intranet');
Route::get('/administrador',[ApmController::class,'autenticar'])->name('autenticacion_apm');
Route::get('/user',[IntranetController::class,'autenticar'])->name('autenticacion_intranet');

Route::resource('/relaciones',RelacionController::class);
Route::resource('/aseguradoras',AseguradoraController::class);
Route::resource('/autorizacion',AutorizacionController::class);
Route::resource('/entidadesbancarias',EntidadBancariaController::class);
Route::resource('/años',AñoController::class);
Route::resource('/empleados',EmpleadoController::class);
Route::resource('/decesos',CarpetaDecesoController::class);
Route::resource('/centros',CentroController::class);
Route::resource('/serviciosDependencias',DependenciaSevicioController::class);
Route::resource('/subtipoDependencias',DependenciaServicioSubtipoController::class);
Route::resource('/documentosIdentificativos',DocumentoIdentificativoController::class);
Route::resource('/figuras',FiguraController::class);
Route::resource('/gradosDependencia',GradoDependenciaController::class);
Route::resource('/iniciadorProcedimiento',IniciadorProcedimientoController::class);
Route::resource('/juzgados',JuzgadoController::class);
Route::resource('/letrados',LetradoController::class);
Route::resource('/motivos',MotivoController::class);
Route::resource('/nacionalidades',NacionalidadController::class);
Route::resource('/nivelDependencias',NivelDependenciaController::class);
Route::resource('/opcionAutorizacion',OpcionAutorizacionController::class);
Route::resource('/patologiasConcretas',PatologiaConcretaController::class);
Route::resource('/patologiasGenerales',PatologiaGeneralController::class);
Route::resource('/prestaciones',PrestacionController::class);
Route::resource('/prestacionDependencias',PrestacionDependenciaController::class);
Route::resource('/procedimientosJudiciales',ProcedimientoJudicialController::class);
Route::resource('/provincias',ProvinciaController::class);
Route::resource('/figuras',FiguraController::class);
Route::resource('/segurosMedicos',SeguroMedicoController::class);
Route::resource('/sexo',SexoController::class);
Route::resource('/estado',EstadoController::class);
Route::resource('/trabajadoresSociales',TrabajadorSocialController::class);
Route::resource('/tiposVia',TipoViaController::class);

Route::resource('/regimenes',RegimenController::class);
Route::resource('/expedientes',ExpedienteController::class);
Route::resource('/defensasjudiciales',DefensaJudicialController::class);
Route::resource('/resoluciones',ResolucionController::class);

Route::get('/busqueda/{vista}',[ExpedienteController::class,'busqueda'])->name('expedientes.busqueda');
Route::get('/consultarExpedientes/{vista}',[ExpedienteController::class,'consultar'])->name('expedientes.consultar');
Route::get('/modificarExpedientes/{vista}',[ExpedienteController::class,'modificar'])->name('expedientes.modificar');
//Route::get('/oficiosExpediente',[ExpedienteController::class,'oficios'])->name('expedientes.oficios');
//Route::get('/oficiostutorExpediente/{vista}',[ExpedienteController::class,'oficios'])->name('expedientes.oficiostutor');
//Route::get('/oficiosdefensorjudicialExpediente/{vista}',[ExpedienteController::class,'oficios'])->name('expedientes.oficiosdefensorjudicial');
//Route::get('/oficioscuradorExpediente/{vista}',[ExpedienteController::class,'oficios'])->name('expedientes.oficioscurador');
Route::get('/buscar/{id}',[ExpedienteController::class,'buscar'])->name('expedientes.buscar');
Route::get('/oficiosExpediente/{vista}',[ExpedienteController::class,'oficios'])->name('expedientes.oficios');
Route::get('/inventariosExpediente/{vista}',[ExpedienteController::class,'inventarios'])->name('expedientes.inventarios');

//Route::get('/busquedaModificar',[ExpedienteController::class,'busquedaModificar'])->name('expedientes.busquedaModificar');
//Route::get('/busquedaConsulta',[ExpedienteController::class,'busquedaConsulta'])->name('expedientes.busquedaConsulta');
Route::get('/busqueda/{vista}',[ExpedienteController::class,'busqueda'])->name('expedientes.busqueda');

/*tutelas*/
Route::get('/tutelas/busquedaTutela/{vista}',[TutelaController::class,'busqueda'])->name('tutelas.busqueda');
Route::get('/consultarTutela/{vista}',[TutelaController::class,'consultar'])->name('tutelas.consultar');
Route::get('/modificarTutela/{vista}',[TutelaController::class,'modificar'])->name('tutelas.modificar');
Route::get('/inventariosTutela/{vista}',[TutelaController::class,'inventarios'])->name('tutelas.inventarios');
Route::get('/oficiosTutela/{vista}',[TutelaController::class,'oficios'])->name('tutelas.oficios');
Route::resource('/tutelas',TutelaController::class);

/*curatelas*/
Route::get('/curatelas/busquedaCuratela/{vista}',[CuratelaController::class,'busqueda'])->name('curatelas.busqueda');
Route::get('/consultarCuratela/{vista}',[CuratelaController::class,'consultar'])->name('curatelas.consultar');
Route::get('/modificarCuratela/{vista}',[CuratelaController::class,'modificar'])->name('curatelas.modificar');
Route::get('/oficiosCuratela/{vista}',[CuratelaController::class,'oficios'])->name('curatelas.oficios');
Route::get('/inventarioCuratela/{vista}',[CuratelaController::class,'inventarios'])->name('curatelas.inventarios');
Route::resource('/curatelas',CuratelaController::class);

/*adminsitracion de bienes*/
Route::get('/adminitracionbienes/busquedaAdmBien/{vista}',[AdministracionBienController::class,'busqueda'])->name('administracionbienes.busqueda');
Route::get('/consultarAdmBienes/{vista}',[AdministracionBienController::class,'consultar'])->name('administracionbienes.consultar');
Route::get('/modificarAdmBienes/{vista}',[AdministracionBienController::class,'modificar'])->name('administracionbienes.modificar');
Route::get('/oficiosAdmBienes/{vista}',[AdministracionBienController::class,'oficios'])->name('administracionbienes.oficios');
Route::get('/inventarioAdmBienes/{vista}',[AdministracionBienController::class,'inventarios'])->name('administracionbienes.inventarios');
Route::resource('/administracionbienes',AdministracionBienController::class);
