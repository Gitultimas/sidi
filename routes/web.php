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

Route::get('/', function () {
    return view('public.index');
})->name('public.index');


Route::get('/home', function () {
    return view('public.index');
})->name('public.index');


//////////
//////////
//////////
Route::get('/noticias', function () {
    return view('public.noticias');
})->name('public.noticias');

Route::get('/noticias/reciente', function () {
    return view('public.noticias');
})->name('public.noticiasReciente');

Route::get('/noticias/relevante', function () {
    return view('public.noticias');
})->name('public.noticiasRelevante');

Route::get('/noticias/categoria', function () {
    return view('public.noticias');
})->name('public.noticiasCategoria');

Route::get('/noticias/autor', function () {
    return view('public.noticias');
})->name('public.noticiasAutor');

Route::get('/noticias/antiguo', function () {
    return view('public.noticias');
})->name('public.noticiasAntiguo');

Route::get('/noticias/antiguo', function () {
    return view('public.noticias');
})->name('public.noticiasAntiguo');
//////////
//////////
//////////  

/*RUTAS DE CONTENIDO PUBLICO, ACCESO SIN VALIDACION, ZONA USUARIOS NO REGISTRADOS*/
Route::get('/formatos', 'publicController@formatos')->name('public.formatos');

Route::get('/galeria','publicController@galeria')->name('public.galeria');

Route::get('/gimnasio','publicController@gimnasio')->name('public.gimnasio');


Route::get('/ubicacion','publicController@ubicacion')->name('public.ubicacion');

Route::get('/organigrama', 'publicController@organigrama')->name('public.organigrama');

Route::get('/transporte','publicController@transporte')->name('public.transporte');

Route::get('/comedor','publicController@comedor')->name('public.comedor');

Route::get('/empleados', 'publicController@empleados')->name('public.empleados');
Route::post('/empleados', 'publicController@searchName')->name('public.empleadosSearchName');
Route::get('/empleados/{cargo}', 'publicController@searchCargo')->name('public.empleadosSearchCargo');

/*RUTAS CON VALIDACION USUARIO REGISTRADO*/
Route::get('/configuracion', 'userController@index')->name('userConfiguration');
Route::post('/configuracion/updateDatper', 'userController@updateDatper');
Route::post('/configuracion/updateDataca', 'userController@updateDataca');
Route::post('/configuracion/updatePhoneContact', 'userController@updatePhoneContact');
Route::post('/configuracion/updatePhotoPerfil', 'userController@updatePhotoPerfil');

Route::get('/documentos','userController@document')->name('documentos');
Route::post('/documentos/vitae','userController@updateVitae')->name('documentos.vitae');
Route::post('/documentos/rif','userController@updateRif')->name('documentos.rif');
Route::post('/documentos/cedula','userController@updateCedula')->name('documentos.ci');
Route::post('/documentos/acta','userController@updateActa')->name('documentos.act');

Route::get('/recibos','userController@recibosIndex')->name('user.recibos');


/*RUTAS PARA EL PANEL DE ADMINISTRADOR DE RECURSOS HUMANOS*/
Route::get('/rrhh', 'rrhhController@index')->name('rrhh.index');


/*RUTAS A LOS PANELES ADMINISTRATIVOS*/
Route::get('/admin', 'adminController@index');
Route::get('/cmd', 'cmdController@index');

/*RUTAS PARA CARGAR LOS USUARIOS DE LA APLICACION*/
Route::get('/userimport', 'publicController@userImport');


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


      

