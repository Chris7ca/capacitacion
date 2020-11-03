<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 *
 * Verbos HTTP
 *
 * GET:  Retornar o recuperar un recurso y para mandar datos se usa query params: ?dato=1&data=3
 *
 * POST: Es utilizado para crear recursos y su cuerpo puede ser json/urlencode/xml/form-data
 *
 * PUT: Actualizar todo un recurso (Usuario [nombre, correo]: *nombre *correo)
 *
 * PATCH: Actualiza un elemento o atributo de un recurso (Usuario [nombre, correo]: *correo)
 *
 * DELETE: Eliminar un recurso y no debería tener cuerpo la solicitud
 *
 */


Route::get('/',                         'Auth\LoginController@mostrarFormulario')->name('login');
// Auth::routes();

Route::post('login',                    'Auth\LoginController@login')->name('login.post');

Route::post('logout',                   'Auth\LoginController@logout')->name('logout');

Route::get('app',                       'AppController@homeApp');

// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Route::get('/home', 'HomeController@index')->name('home');
