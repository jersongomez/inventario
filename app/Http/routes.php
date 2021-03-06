<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('herramienta', 'HerramientaController');

Route::get('graciaspago',function(){

	$datos = \App\Ordenes::find(1);
	//dd($datos->inventario->descr);
	//return view('correos/graciaspago', ['datos' => $datos]);
});

Route::resource('mail','MailController');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

//Route::pattern('id', '\d+');  //Se define solo los parametros van a hacer numeros
Route::get('/', 'PrincipalController@index');

Route::get('usuarios/{id}/restaurar', [
	'uses' => 'UsersController@restaurar',
	'as' => 'usuarios.restaurar'
	]);
Route::get('usuarios/eliminada', 'UsersController@eliminada');
Route::resource('usuarios','UsersController');


Route::resource('movil','MovilController');

Route::resource('migracion', 'MigracionController');
Route::get('migracion/imagenes', [
	'uses' => 'MigracionController@imagenes',
	'as' => 'migracion.imagenes']);
Route::post('migracion/saveimagenes', [
	'uses' => 'MigracionController@saveimagenes',
	'as' => 'migracion.saveimagenes']);
/*
Route::controller('imagenes', 'ImagenesController', [
    'anyData'  => 'imagenes.data',
    'getIndex' => 'imagenes',]);
*/

Route::get('imagenes/data', [
	'uses' => 'ImagenesController@AnyData',
	'as' => 'imagenes.data']);

/*Route::get('imagenes/index', [
	'uses' => 'ImagenesController@index',
	'as' => 'imagenes.index']);
*/
Route::get('imagenes/galeria', [
	'uses' => 'ImagenesController@galeria',
	'as' => 'imagenes.galeria']);

Route::resource('imagenes', 'ImagenesController');


//Route::controller('formulario', 'FormularioController');
Route::resource('login', 'LoginController');
Route::get('/logout', 'LoginController@logout');

//Route::controller('configuracion', 'ConfiguracionController');

//Route::resource('login','LoginController');

Route::resource('configuracion','ConfiguracionController');
Route::get('configuracion/{id}/destroy', [
	'uses' => 'ConfiguracionController@destroy',
	'as' => 'configuracion.destroy'
	]);


Route::get('banco/{id}/restaurar', [
	'uses' => 'BancoController@restaurar',
	'as' => 'banco.restaurar'
	]);
Route::get('banco/eliminada', 'BancoController@eliminada');
Route::get('banco/listado', 'BancoController@listado');

Route::resource('banco','BancoController');
Route::get('banco/{id}/destroy', [
	'uses' => 'BancoController@destroy',
	'as' => 'banco.destroy'
	]);

Route::get('encomienda/eliminada', 'EncomiendaController@eliminada');
Route::resource('encomienda','EncomiendaController');
Route::get('encomienda/{encomienda}/destroy', [
	'uses' => 'EncomiendaController@destroy',
	'as' => 'encomienda.destroy'
	]);

/*
Route::get('encomienda/eliminada', [
	'uses' => 'EncomiendaController@eliminada',
	'as' => 'encomienda.eliminada'
	]);
*/
Route::get('encomienda/{id}/restaurar', [
	'uses' => 'EncomiendaController@restaurar',
	'as' => 'encomienda.restaurar'
	]);

Route::get('inventario/{id}/cambiaroferta/{page}', [
	'uses' => 'InventarioController@cambiaroferta',
	'as' => 'inventario.cambiaroferta'
	]);

Route::get('inventario/{id}/cambiarestatus/{page}', [
	'uses' => 'InventarioController@cambiarestatus',
	'as' => 'inventario.cambiarestatus'
	]);

Route::get('inventario/{id}/restaurar', [
	'uses' => 'InventarioController@restaurar',
	'as' => 'inventario.restaurar'
	]);
Route::get('inventario/eliminada', 'InventarioController@eliminada');
Route::resource('inventario','InventarioController');
Route::get('inventario/{id}/destroy', [
	'uses' => 'InventarioController@destroy',
	'as' => 'inventario.destroy'
	]);

/*
Route::post('ordene/updatenviar', function (Request $request)
	{
		return $request->all();
	});*/

Route::post('ordene/updatenviar', [
	'uses' => 'OrdeneController@updatenviar',
	'as' => 'ordene.updatenviar'
	]);


Route::get('ordene/compra', [
	'uses' => 'OrdeneController@compra',
	'as' => 'ordene.compra']);

Route::post('ordene/store_compra', [
	'uses' => 'OrdeneController@store_compra',
	'as' => 'ordene.store_compra'
	]);


Route::get('ordene/{id}/showpago', [
	'uses' => 'OrdeneController@showpago',
	'as' => 'ordene.showpago'
	]);

Route::get('ordene/{id}/enviar', [
	'uses' => 'OrdeneController@enviar',
	'as' => 'ordene.enviar'
	]);

Route::get('ordene/enviado', [
	'uses' => 'OrdeneController@enviado',
	'as' => 'ordene.enviado']);

Route::get('ordene/{id}/imprimirorden', [
	'uses' => 'OrdeneController@imprimirorden',
	'as' => 'ordene.imprimirorden'
	]);

Route::get('ordene/reporteporenviar', [
	'uses' => 'OrdeneController@reporteporenviar',
	'as' => 'ordene.reporteporenviar']);

Route::resource('ordene','OrdeneController');
Route::get('ordene/{id}/destroy', [
	'uses' => 'OrdeneController@destroy',
	'as' => 'ordene.destroy'
	]);

Route::get('ordene/{id}/destroyenviado', [
	'uses' => 'OrdeneController@destroyenviado',
	'as' => 'ordene.destroyenviado'
	]);


/*
Route::group(['prefix' => 'configuracion'], function(){
	Route::resource('configuracion','ConfiguracionController');
	Route::get('configuracion/{id}/destroy', [
	'configuracion' => 'ConfiguracionController@destroy',
	'as' => 'configuracion.destroy'
	]);
});
*/
/*
Route::get('jesus', function()
{
	return View::make('configuracion');
});
*/