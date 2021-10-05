<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Contracts\Session;
use Illuminate\Support\Facades\Session;

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



//Route::get('/', function () {
//    $products=\App\Models\Product::all();
//    return view('index', compact('products'));
//});
//Route::get('/product/{id}', function ($id) {
//    $products=\App\Models\Product::find($id);
//    return view('product', compact('products'));
//})->name('product');
//
//
//Route::get('/add/{id}', function ($id, $count=1, \App\Models\Product $product) {
//    $pr = $product->find($id);
//    $result_cart=[];
//    if (!empty(Session::get('basket'))){
//        $result_cart=['id' =>$id, 'count'=>$count];
//    }
//    else
//    Session::put('basket', ['id'=>$id, 'count'=>$count]);
//    $seesion=Session::all();
//    dd($seesion);
//    return redirect('product/'.$id );
//})->name('add');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


//Route::group([
//    'as' => 'auth.', // имя маршрута, например auth.index
//    'prefix' => 'auth', // префикс маршрута, например auth/index
//], function () {
//    // форма регистрации
//    Route::get('register', 'Auth\RegisterController@register')
//        ->name('register');
//    // создание пользователя
//    Route::post('register', 'Auth\RegisterController@create')
//        ->name('create');
    // форма входа
//    Route::get('login', 'Auth\LoginController@login')
//        ->name('login');
//    // аутентификация
//    Route::post('login', 'Auth\LoginController@authenticate')
//        ->name('auth');
//    // выход
//    Route::get('logout', 'Auth\LoginController@logout')
//        ->name('logout');
//});
//
/*
 * Личный кабинет пользователя
 */

//Route::group([
//    'as' => 'user.', // имя маршрута, например user.index
//    'prefix' => 'user', // префикс маршрута, например user/index
//    'namespace' => 'User', // пространство имен контроллеров
//    'middleware' => ['auth'] // один или несколько посредников
//], function () {
//    // главная страница
//  //  Route::get('index', 'User\IndexController')->name('index');
//});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
