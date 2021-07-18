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
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
// Route::get('/', function () {
//     return view('auth.login');
// });
/*Admin Route Start*/
/*Authentication*/
Route::get('/admin/login', [App\Http\Controllers\admin\AdminController::class, 'showLogin']);
Route::post('/admin/login', [App\Http\Controllers\admin\AdminController::class, 'doLogin']);
Route::get('/admin/logout', [App\Http\Controllers\admin\AdminController::class, 'doLogout']);
Route::get('/admin', [App\Http\Controllers\admin\AdminController::class, 'index']);

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/service', 'ServiceController@index');
Route::get('/team', 'TeamController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/testimonial', 'TestimonialController@index');
Route::get('/privacy-policy', 'TermPolicyController@privacy');
Auth::routes();

//Route::get('/home', 'admin\DashboardController@index');

Route::get('admin/home', 'admin\DashboardController@index');
//Route::get('admin', 'admin\DashboardController@index');
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Route::get('admin/setting', 'admin\DashboardController@admin_setting')->name('admin-setting');
Route::post('admin/update-admin-details', 'admin\DashboardController@update_admin_details');
Route::post('admin/update-admin-password', 'admin\DashboardController@update_admin_password');
Route::get('admin/footer-details', 'admin\HeaderfooterController@index');
Route::post('admin/footer-details-post', 'admin\HeaderfooterController@footer_post');
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Route::get('admin/service-add', 'admin\ServiceController@index');
Route::post('admin/service-add-post', 'admin\ServiceController@service_add_post');
Route::get('admin/service-list', 'admin\ServiceController@service_list_view');
Route::get('admin/service-edit-view/{id}', 'admin\ServiceController@service_edit_view')->where('id', '[0-9]+');
Route::post('admin/service-update-post', 'admin\ServiceController@service_update_post');
Route::get('admin/service-remove/{id}', 'admin\ServiceController@service_destroy')->where('id', '[0-9]+');
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
