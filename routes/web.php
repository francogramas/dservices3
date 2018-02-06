<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('prueba',function(){
	return view('prueba');
});

Route::get('solicitudpendiente/{sedes_id}','admin\solicitudesController@pendientes');
Route::get('pagofactura/{solicitud_id}','usuarios\pagosController@show');
  

Route::get('/','wellcomeController@index')->name('home');
Route::get('/home', 'wellcomeController@index')->name('home');

Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');

Route::resource('/pais','general\pais');
Route::get('/buscar/contratistas','admin\contratistasController@autocompletar');
Route::get('/buscar/servicioscontratistas','usuarios\serviciosController@autocompletar');
Route::get('/buscar/servicioscontratistasLista','usuarios\serviciosController@autocompletarLista');
Route::get('/departamentos/{id}','general\estadosController@getEstados');
Route::get('/ciudades/{id}','general\ciudadesController@getCiudades');

//Redirecciona a los usuarios de acuerdo al rol que tengan
Route::resource('/direccionador', 'admin\direccionadorController');
Route::resource('/sedesu','usuarios\sedesController');
Route::resource('/servicios','usuarios\serviciosController');
Route::get('/tiposervicios/{ciudadid}/','general\sedesController@tipoServicios');

Route::post('/pagosconfirmacion','usuarios\pagosController@confirmacion');
Route::post('/pagosmembresiaconfirmacion','usuarios\pagosController@membresiaconfirmacion');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::group(['middleware' => ['auth', 'roles'],'roles' => ['user']],
function () {
	Route::resource('/confirmardatos','Auth\confirmarDatosController');		
	Route::resource('/solicitudes','usuarios\solicitudesController');
	Route::resource('/pagos','usuarios\pagosController');
	Route::resource('/membresia','usuarios\membresiaController');
	Route::get('/solicitudestabla','usuarios\solicitudesController@mostrarTabla');
	Route::get('/pagosrespuesta','usuarios\pagosController@respuesta');
});

Route::group(['prefix' => 'admin1', 'middleware' => ['auth', 'roles'], 'roles' => ['admin']],
function () {
	Route::get('admservicioscontratistas','admin\serviciosContratistasController@autocompletar');	
	Route::get('solicituddetalle/{id}','usuarios\solicitudesController@detalle');	
	Route::resource('categorias','admin\categoriasController');
	Route::resource('sedes','admin\sedesController');
	Route::resource('contratistas','admin\contratistasController');
	Route::resource('servicioscontratistas','admin\serviciosContratistasController');
	Route::resource('admsolicitudes','admin\solicitudesController');
	Route::resource('pagospendientes','admin\porpagarController');
	Route::resource('usuarios1','admin\usuariosController');
	Route::resource('admusuarios','admin\admusuariosController');
	Route::resource('ordenes','admin\ordenesController');
	Route::get('mostrarsolicitudes','admin\solicitudesController@mostarSolicitudes');
	Route::get('buscarusuario','admin\admusuariosController@autocompletar');
});

Route::group(['prefix' => 'superadmin', 'middleware' => ['auth', 'roles'], 'roles' => ['superadmin']],
function () {
	Route::resource('configuracion','admin\configuracionController');
	Route::resource('tarifas','superadmin\tarifasController');
	Route::resource('usuarios','superadmin\usuariosController');
	Route::resource('especialidades','superadmin\especialidadesController');
});

Route::group(['prefix' => 'promotor', 'middleware' => ['auth', 'roles'], 'roles' => ['promotor']],
function () {
	Route::resource('usuario','admin\usuariosController');	
});
