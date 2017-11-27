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

Route::get('/', 'SiteController@index');
Route::post('/contato', function(){})->name('contato');
Route::post('/newsletter/assinar', function(){})->name('newsletter.assinar');

Auth::routes();

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function(){
    Route::get('setlocale/{locale}', function ($locale) {
        Session::put('locale',$locale);
        
        return redirect()->back();
    })->name('admin.locale.set');

    Route::get('/', 'HomeController@index')->name('admin.home');
    
    Route::resource('roles', 'RoleController');
    
    Route::resource('permissions', 'PermissionController');
    
    Route::resource('users', 'UserController');
});