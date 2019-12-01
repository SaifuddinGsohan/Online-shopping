<?php


use Illuminate\Support\Facades\Auth;
use App\Produck;


Route::get('/user','AdminC@index');


Route::resource('/order','OrderC');

Route::resource('/produck','ProduckC');




Route::get('/show', function () {
    return view('produck.show');
});


/*
|--------------------------------------------------------------------------
| layout text
|--------------------------------------------------------------------------
*/

Route::get('/ss', function () {

    //$user = Auth::user();

   // $items = Produck::all();

    return view('layouts.index');

});

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

Route::get('/abc', function () {

    //$user = Auth::user();

    $items = Produck::all();

    return view('home',compact('order'));

});



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');




