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

//Route::get('/','PostController@showForm');
Route::get('/',function (){
    return view('site.home');
})->name('site.home');

Route::get('/cursos',function (){
    return view('site.courses');
})->name('site.courses');


Route::get('/contato',function (){
    return view('site.contact');
})->name('site.contact');




//Route::post('/debulg','PostController@debulg')->name('debulg');
//
//Route::get('/usuario/{id}','UserController@show');
//Route::get('/endereco/{address}','AddressController@show');
//Route::get('/artigo/{post}','PostController@show');
//Route::get('/categoria/{category}','CategoryController@show');




//agrupamento de rotas
//Route::group(['namespace' => 'Form'], function (){
//    Route::get('listagem-usuario', 'UserController@ListUser');
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
