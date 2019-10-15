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

Route::get('/articulos', function () {
    return view('articulos');
});

/* Route::get('/notices', function(){
	//return view('noticias')
	return "Estas son las noticias";
})

Route::get('/notices', function(){
	//return view('articulos')
	return "Estas son los articulos de opinión";
})

Route::get('/notices', function(){
	//return view('bestgame')
	return "Este es el juego del mes";
})

Route::get('/notices', function(){
	//return view('contacto')
	return "Contacta con nosotros";
})

*/

Route::resource("posts","PruebaController");