<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PropertyController;

Route::get('/',function(){
	return redirect(route('adminarea'));
});

/*======= All BackAdmin Routes =========*/
Route::group(['namespace' => 'Back', 'prefix' => 'adminarea', 'middleware' => ['auth:admin', 'language']], function () {
	Route::get('/', 'DashboardController@index')->name('adminarea');
	Route::resource('companies', 'CompaniesController');
	Route::resource('employes', 'EmployesController');
});


/*======= Ajax & Common Routes =========*/
Route::group(['namespace' => 'Back'], function () {
	// File Upload/Remove Routes
	Route::any('ajax_upload_image', 'FileUploadController@ajax_upload_image')->name('ajax_upload_image');
	Route::any('ajax_remove_image', 'FileUploadController@ajax_remove_image')->name('ajax_remove_image');
	Route::any('ajaxRemoveModuleImg', 'FileUploadController@removeModuleImage')->name('ajaxRemoveModuleImg');
});


/*======= All Authentications Routes =========*/
Route::get('/admin_login', 'Auth\AdminLoginController@showLoginForm')->name('admin_login');
Route::post('/admin_login_submit', 'Auth\AdminLoginController@login')->name('admin_login_submit');
Route::any('/admin_logout', 'Auth\AdminLoginController@logout')->name('admin_logout');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



