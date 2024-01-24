<?php

use App\Http\Controllers\ApmController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AseguradoraController;
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
use App\Http\Controllers\OpcionRevisionController;
use App\Http\Controllers\ParentescoController;
use App\Http\Controllers\PatologiaConcretaController;
use App\Http\Controllers\PatologiaGeneralController;
use App\Http\Controllers\PrestacionController;
use App\Http\Controllers\PrestacionDependenciaController;
use App\Http\Controllers\ProcedimientoJudicialController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\RegimenController;
use App\Http\Controllers\TipoResolucionController;
use App\Http\Controllers\SeguroMedicoController;
use App\Http\Controllers\SexoController;
use App\Http\Controllers\SituacionController;
use App\Http\Controllers\TrabajadorSocialController;
use App\Http\Controllers\IntranetController;
use App\Http\Controllers\JudicialesDefensaController;
use App\Http\Controllers\ResolucionController;
use App\Http\Controllers\TutelaController;
use App\Http\Controllers\CuratelaController;
use App\Http\Controllers\AdministracionBienController;
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

Route::resource('/parentescos',ParentescoController::class);
Route::resource('/aseguradoras',AseguradoraController::class);
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
Route::resource('/opcionRevision',OpcionRevisionController::class);
Route::resource('/patologiasConcretas',PatologiaConcretaController::class);
Route::resource('/patologiasGenerales',PatologiaGeneralController::class);
Route::resource('/prestaciones',PrestacionController::class);
Route::resource('/prestacionDependencias',PrestacionDependenciaController::class);
Route::resource('/procedimientosJudiciales',ProcedimientoJudicialController::class);
Route::resource('/provincias',ProvinciaController::class);
Route::resource('/tiposresoluciones',TipoResolucionController::class);
Route::resource('/segurosMedicos',SeguroMedicoController::class);
Route::resource('/sexo',SexoController::class);
Route::resource('/situacion',SituacionController::class);
Route::resource('/trabajadoresSociales',TrabajadorSocialController::class);
Route::resource('/regimenes',RegimenController::class);
Route::resource('/expedientes',ExpedienteController::class);
Route::resource('/defensasjudiciales',JudicialesDefensaController::class);
Route::resource('/resoluciones',ResolucionController::class);

Route::get('/consultarExpedientes',[ExpedienteController::class,'consultar'])->name('expedientes.consultar');
Route::get('/modificarExpedientes',[ExpedienteController::class,'modificar'])->name('expedientes.modificar');
Route::get('/buscar/{id}',[ExpedienteController::class,'buscar'])->name('expedientes.buscar');

Route::get('/busquedaModificar',[ExpedienteController::class,'busquedaModificar'])->name('expedientes.busquedaModificar');
Route::get('/busquedaConsulta',[ExpedienteController::class,'busquedaConsulta'])->name('expedientes.busquedaConsulta');

Route::get('/consultarTutela',[TutelaController::class,'consultar'])->name('tutelas.consultar');
Route::get('/modificarTutela',[TutelaController::class,'modificar'])->name('tutelas.modificar');
Route::get('/oficiosTutela',[TutelaController::class,'oficios'])->name('tutelas.oficios');
Route::get('/inventarioTutela',[TutelaController::class,'inventarios'])->name('tutelas.inventarios');
Route::get('/tutelas/busquedaTutelaConsulta',[TutelaController::class,'busquedaConsulta'])->name('tutelas.busquedaConsulta');
Route::get('/tutelas/busquedaTutelaModificar',[TutelaController::class,'busquedaModificar'])->name('tutelas.busquedaModificar');
Route::resource('/tutelas',TutelaController::class);
Route::get('/consultarCuratela',[CuratelaController::class,'consultar'])->name('curatelas.consultar');
Route::get('/modificarCuratela',[CuratelaController::class,'modificar'])->name('curatelas.modificar');
Route::get('/oficiosCuratela',[CuratelaController::class,'oficios'])->name('curatelas.oficios');
Route::get('/inventarioCuratela',[CuratelaController::class,'inventarios'])->name('curatelas.inventarios');
Route::resource('/curatelas',CuratelaController::class);
Route::get('/consultarAdmBienes',[AdministracionBienController::class,'consultar'])->name('administracionbienes.consultar');
Route::get('/modificarAdmBienes',[AdministracionBienController::class,'modificar'])->name('administracionbienes.modificar');
Route::get('/oficiosAdmBienes',[AdministracionBienController::class,'oficios'])->name('administracionbienes.oficios');
Route::get('/inventarioAdmBienes',[AdministracionBienController::class,'inventarios'])->name('administracionbienes.inventarios');
Route::resource('/administracionbienes',AdministracionBienController::class);
