<?php

use App\Http\Controllers\ApmController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AseguradoraController;
use App\Http\Controllers\AñoController;
use App\Http\Controllers\CarpetaDecesoController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\CocheController;
use App\Http\Controllers\ComparecenciaController;
use App\Http\Controllers\CtaexRepresentanteController;
use App\Http\Controllers\DependenciaServicioSubtipoController;
use App\Http\Controllers\DependenciaSevicioController;
use App\Http\Controllers\DocumentoIdentificativoController;
use App\Http\Controllers\EntidadBancariaController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\FiguraController;
use App\Http\Controllers\GradoDependenciaController;
use App\Http\Controllers\IniciadorProcedimientoController;
use App\Http\Controllers\InstruccionJuzgadoController;
use App\Http\Controllers\JuzgadoController;
use App\Http\Controllers\LetradoController;
use App\Http\Controllers\MotivoController;
use App\Http\Controllers\NacionalidadController;
use App\Http\Controllers\NivelDependenciaController;
use App\Http\Controllers\OpcionRevisionController;
use App\Http\Controllers\ParentescoController;
use App\Http\Controllers\PatologiaConcretaController;
use App\Http\Controllers\PatologiaGeneralController;
use App\Http\Controllers\PenalJuzgadoController;
use App\Http\Controllers\PrestacionController;
use App\Http\Controllers\PrestacionDependenciaController;
use App\Http\Controllers\ProcedimientoJudicialController;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\RegimenController;
use App\Http\Controllers\ProcedimientoResolucionController;
use App\Http\Controllers\SeguroMedicoController;
use App\Http\Controllers\SexoController;
use App\Http\Controllers\SituacionController;
use App\Http\Controllers\TrabajosController;
use App\Http\Controllers\TrabajadorSocialController;
use App\Http\Controllers\IntranetController;
use App\Http\Controllers\JudicialesDefensaController;
use App\Http\Controllers\ResolucionController;
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
//Route::get('/indice',[ApmController::class,'index'])->name('index_apm');
Route::get('/indiceapm',[ApmController::class,'index'])->name('index_apm');
Route::get('/indiceintranet',[IntranetController::class,'index'])->name('index_intranet');

Route::resource('/parentescos',ParentescoController::class);
Route::resource('/aseguradoras',AseguradoraController::class);
Route::resource('/entidadesbancarias',EntidadBancariaController::class);
Route::resource('/años',AñoController::class);
Route::resource('/empleados',EmpleadoController::class);
Route::resource('/decesos',CarpetaDecesoController::class);
Route::resource('/centros',CentroController::class);
Route::resource('/coches',CocheController::class);
Route::resource('/comparecencias',ComparecenciaController::class);
Route::resource('/representantesCtaex',CtaexRepresentanteController::class);
Route::resource('/serviciosDependencias',DependenciaSevicioController::class);
Route::resource('/subtipoDependencias',DependenciaServicioSubtipoController::class);
Route::resource('/documentosIdentificativos',DocumentoIdentificativoController::class);
Route::resource('/figuras',FiguraController::class);
Route::resource('/gradosDependencia',GradoDependenciaController::class);
Route::resource('/iniciadorProcedimiento',IniciadorProcedimientoController::class);
Route::resource('/juzgadoInstruccion',InstruccionJuzgadoController::class);
Route::resource('/juzgados',JuzgadoController::class);
Route::resource('/letrados',LetradoController::class);
Route::resource('/motivos',MotivoController::class);
Route::resource('/nacionalidades',NacionalidadController::class);
Route::resource('/nivelDependencias',NivelDependenciaController::class);
Route::resource('/opcionRevision',OpcionRevisionController::class);
Route::resource('/patologiasConcretas',PatologiaConcretaController::class);
Route::resource('/patologiasGenerales',PatologiaGeneralController::class);
Route::resource('/juzgadoPenal',PenalJuzgadoController::class);
Route::resource('/prestaciones',PrestacionController::class);
Route::resource('/prestacionDependencias',PrestacionDependenciaController::class);
Route::resource('/procedimientosJudiciales',ProcedimientoJudicialController::class);
Route::resource('/profesionales',ProfesionalController::class);
Route::resource('/provincias',ProvinciaController::class);
Route::resource('/puestos',PuestoController::class);
Route::resource('/procedimientosresoluciones',ProcedimientoResolucionController::class);
Route::resource('/segurosMedicos',SeguroMedicoController::class);
Route::resource('/sexo',SexoController::class);
Route::resource('/situacion',SituacionController::class);
Route::resource('/trabajadoresSociales',TrabajadorSocialController::class);
Route::resource('/regimenes',RegimenController::class);
Route::resource('/trabajos',TrabajosController::class);
Route::resource('/expedientes',ExpedienteController::class);
Route::resource('/defensasjudiciales',JudicialesDefensaController::class);
Route::resource('/resoluciones',ResolucionController::class);

Route::get('/consultarExpedientes',[ExpedienteController::class,'consultar'])->name('expedientes.consultar');
Route::get('/busquedaEdicion',[ExpedienteController::class,'busquedaEdicion'])->name('expedientes.busquedaEdicion');