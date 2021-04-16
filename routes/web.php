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

Route::get('/','PostController@showForm');
Route::post('/debulg','PostController@debulg')->name('debulg');



//agrupamento de rotas
//Route::group(['namespace' => 'Form'], function (){
    Route::get('listagem-usuario', 'UserController@ListUser');
//
//    Route::get('usuarios', 'TestController@listAllUsers')->name('users.listAll');
//    Route::get('usuarios/novo', 'TestController@formAddUser')->name('users.formAddUser');
//    Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formEditUser');
//    Route::get('usuarios/{user}', 'TestController@listUser')->name('users.list');
//    Route::post('usuarios/store', 'TestController@storeUser')->name('users.store');
//    Route::patch('usuarios/edit/{user}', 'TestController@edit')->name('users.edit');
//    Route::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('user.destroy');
//
//
//});

//Route::resource('usuarios', 'Form\\TestController')->names('user')->parameters(['usuarios' => 'user']);


