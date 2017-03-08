<?php

use Yajra\Datatables\Datatables;
use App\User;

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
Route::group(['prefix' => 'admin'], function () {
		Route::group(['prefix' => 'manager_user'], function() {
			Route::resource('user', 'UserController');
			Route::resource('role', 'RoleController');
			Route::resource('role-user', 'RoleUserController');

		});
   		//Route::resource('users', 'UserController');
});

/* bengin datatable*/
Route::get('datatables', ['as' => 'datatables', 'uses' => 'DatatablesController@userData']);
Route::get('datatables/role', ['as' => 'datatables.role', 'uses' => 'DatatablesController@roleData']);
Route::get('datatables/roleuser', ['as' => 'datatables.roleuser', 'uses' => 'DatatablesController@roleUserData']);

/*end datatable*/
Auth::routes();

Route::get('/home', 'HomeController@index');
