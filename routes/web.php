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
    $slides = [
      (object)[
        'titulo'=>'Constance',
        'descricao'=>'Savassi',
        'url'=>'www.constance.com.br',
        'imagem'=>'http://blog.constance.com.br/wp-content/uploads/2016/10/Constance.jpg'

      ]
    ];

    return view('site.home',compact('slides'));
});

Auth::routes();

Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {

  Route::get('/', 'Admin\AdminController@index');
  Route::resource('usuarios', 'Admin\UsuarioController');

  Route::get('usuarios/papel/{id}', ['as'=>'usuarios.papel','uses'=>'Admin\UsuarioController@papel']);
  Route::post('usuarios/papel/{papel}', ['as'=>'usuarios.papel.store','uses'=>'Admin\UsuarioController@papelStore']);
  Route::delete('usuarios/papel/{usuario}/{papel}', ['as'=>'usuarios.papel.destroy','uses'=>'Admin\UsuarioController@papelDestroy']);

  Route::resource('papeis', 'Admin\PapelController');

  Route::get('papeis/permissao/{id}', ['as'=>'papeis.permissao','uses'=>'Admin\PapelController@permissao']);
  Route::post('papeis/permissao/{permissao}', ['as'=>'papeis.permissao.store','uses'=>'Admin\PapelController@permissaoStore']);
  Route::delete('papeis/permissao/{papel}/{permissao}', ['as'=>'papeis.permissao.destroy','uses'=>'Admin\PapelController@permissaoDestroy']);


  Route::get('usuarios/perfil/{id}', ['as'=>'usuarios.perfil','uses'=>'Admin\UsuarioController@perfil']);
  Route::post('usuarios/perfil/{perfil}', ['as'=>'usuarios.perfil.store','uses'=>'Admin\UsuarioController@perfilStore']);
  Route::delete('usuarios/perfil/{usuario}/{perfil}', ['as'=>'usuarios.perfil.destroy','uses'=>'Admin\UsuarioController@perfilDestroy']);

  Route::resource('perfil', 'Admin\PerfilController');

});
