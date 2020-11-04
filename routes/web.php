<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// #1 - PDF.

Route::get('/pdf', function(){
	return view('PDF');
});
Route::get('/ver-pdf', 'HomeController@pdf')->name('pdf.index');

// #2 - Paginación Ajax.

Route::get('/paginacion-ajax', function(){
	$items = App\Item::paginate(5);
	return view('paginacion', compact('items'));
});

// Otros.

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
