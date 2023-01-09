<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', '\App\Http\Controllers\Front\UserController@showAdminName');


Route::get('/index', function () {
    return view('index');});


Route::get('/about', function () {
    return view('about');});




Route::get('/test2/{id}', function ($id) {
    return $id;
});

Route::get('/test3/{id?}', function () {
    return 'welcome';
})-> name('a');

Route::namespace('\App\Http\Controllers\Front')->group(function (){

    Route::get('users','UserController@showAdminName');
    Route::get('users2','UserController@showAdminName2');

});




Route::group(['prefix'=>'users','middleware'=>'auth'],function(){
    Route::get('name',function (){
        return 'leo';

    });


});
Route::namespace('\App\Http\Controllers')->group(function () {
    Route::resource('news','NewsController');

}
    );



Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

