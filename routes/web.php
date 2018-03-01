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


//ruta de inicio de session
Route::get('/',function(){
  $Users= App\User::all();
  return view ('welcome', compact('Users'));
});


//creacion de pdf //S

Route::get('send','MailController@send');









//Route::post('/Login','Auth\LoginController@login')->name('login');


//------------------------


/*Recursos para crear las rutas del CRUD*/

//Rutas y controladores referentes a los articulos
Route::resource('articulos','Articulos\ArticuloController');


Route::get('activos/create/paso_1','Articulos\ActivoController@paso_1');
Route::get('activos/create/paso_2','Articulos\ActivoController@paso_2');
Route::post('activos/create/paso_2','Articulos\ActivoController@paso_2');
Route::post('activos/create','Articulos\ActivoController@create');
Route::resource('activos','Articulos\ActivoController');



Route::resource('inactivos','Articulos\InactivoController');

Route::resource('centro de costos','Articulos\Centro_CostoController');

Route::resource('subastados','Articulos\SubastadoController');
Route::resource('donados','Articulos\DonadoController');
Route::resource('destruidos','Articulos\DestruidoController');
Route::resource('factura','Articulos\FacturaController');
Route::resource('reembolsos','Articulos\ReembolsoController');
Route::resource('reparaciones','Articulos\ReparacionController');

Route::resource('lugares','Articulos\LugarController');

Route::resource('dependencias','Articulos\DependenciaController');
Route::resource('areas','Articulos\AreaController');

Route::resource('empleados','Articulos\EmpleadoController');
Route::resource('ocupaciones','Articulos\OcupacionController');
Route::resource('administradores','Articulos\AdministradorController');


//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ------------Rutas que utiliza Auth-------------------------------
// Authentication Routes... Login

//--------------------------------------------------------------------

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
