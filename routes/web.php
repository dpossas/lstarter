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

Route::prefix('/documentation')->group(function(){
    Route::get('/', 'DocumentationController@index')->name('documentation.index');
    Route::get('/requirements', 'DocumentationController@requirements')->name('documentation.requirements');
    Route::get('/installation', 'DocumentationController@installation')->name('documentation.installation');
});