<?php


use Illuminate\Support\Facades\Auth;
use App\Product;


Route::get('/user','AdminC@index');

// Route::resource('/like','LikeC');

Route::resource('/order','OrderC');

Route::resource('/product','ProductC');

Route::get('like/{id}/delete','OrderC@likeDelete');

Route::get('product/{id}/delete','ProductC@destroy');

Route::get('like','OrderC@like')->name('like');

Route::get('like/{id}/store','OrderC@storelike')->name('storelike');

Route::get('search/{qury}','ProductC@search')->name('search');

Route::get('searchc/{qury}','ProductC@searchCategorie');

Route::get('order/{id}/create','OrderC@create');

Route::get('order/{id}/delete','OrderC@destroy');

Route::get('/show', function () {
    return view('product.show');
});


Route::get('/contact', function () {

    //$user = Auth::user();

    return view('contact');

});

Route::get('/about', function () {

    //$user = Auth::user();

    return view('about');

});


/*
|--------------------------------------------------------------------------
| layout text
|--------------------------------------------------------------------------
*/

Route::get('/ss', function () {


    $products = Product::all();

    return view('product.search',compact('products'));


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

    $items = Product::all();

    return view('home',compact('order'));

});



Auth::routes();

Route::get('/', 'HomeController@index')->name('index');




