<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthenticationController as authCtrl;
use App\Http\Controllers\DashboardController;

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
Route::group(['middleware'=>'UnknownUser'],function(){
    Route::get('/', [authCtrl::class, 'signInForm'])->name('default');
    Route::get('/login', [authCtrl::class, 'signInForm'])->name('login');
    Route::get('/sign-in', [authCtrl::class, 'signInForm'])->name('signin');
    Route::post('/sign-in', [authCtrl::class, 'signIn'])->name('signin.varify');

    Route::get('/sign-up', [authCtrl::class, 'signUpForm'])->name('signup');
    Route::post('/sign-up', [authCtrl::class, 'signUpStore'])->name('signUpStore');

    Route::get('/forget-password', [authCtrl::class, 'forgetForm'])->name('forget');
});

Route::get('/logout', [authCtrl::class, 'logout'])->name('logout');

/* superadmin group */
Route::group(['middleware'=>'isSuperadmin'],function(){
    Route::prefix('/superadmin')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'superadmin'])->name('superadmin.dashboard');
		
		/* chef router */
		Route::get('cheflist', 'ChefController@index')->name('cheflist');
		Route::get('chefadd', 'ChefController@create')->name('chefadd');
		Route::post('chefset', 'ChefController@store');
		Route::get('chefedit/{id}', 'ChefController@edit');
		Route::post('chefupdate/{id}', 'ChefController@update')->name('chef.update');
		Route::get('chefdelete/{id}', 'ChefController@destroy');
		
		/* waiter router */
		Route::get('waiterlist', 'WaiterController@index')->name('waiterlist');
		Route::get('waiteradd', 'WaiterController@create')->name('waiteradd');
		Route::post('waiterset', 'WaiterController@store');
		Route::get('waiteredit/{id}', 'WaiterController@edit');
		Route::post('waiterupdate/{id}', 'WaiterController@update')->name('waiter.update');
		Route::get('waiterdelete/{id}', 'WaiterController@destroy');
		
		/* delivery boy router */
		Route::get('dboylist', 'DboyController@index')->name('dboylist');
		Route::get('dboyadd', 'DboyController@create')->name('dboyadd');
		Route::post('dboyset', 'DboyController@store');
		Route::get('dboyedit/{id}', 'DboyController@edit');
		Route::post('dboyupdate/{id}', 'DboyController@update')->name('dboy.update');
		Route::get('dboydelete/{id}', 'DboyController@destroy');
		
		
		/* order section router */
		Route::get('orderlist', 'OrderController@index')->name('orderlist');
		Route::get('orderadd', 'OrderController@create')->name('orderadd');
		Route::post('orderset', 'OrderController@store');
		Route::get('orderedit/{id}', 'OrderController@edit');
		Route::post('orderupdate/{id}', 'OrderController@update')->name('order.update');
		Route::get('orderdelete/{id}', 'OrderController@destroy');
		
		/* dish router */
		Route::get('dishlist', 'DishController@index')->name('dishlist');
		/* Route::get('/dishlist', [DishController::class, 'index']); */
		Route::get('dishadd', 'DishController@create')->name('dishadd');
		Route::post('dishset', 'DishController@store')->name('dish.set');
		Route::get('dishedit/{id}', 'DishController@edit');
		Route::post('dishupdate/{id}', 'DishController@update')->name('dish.update');
		Route::get('dishdelete/{id}', 'DishController@destroy');

		/* order section router */
		Route::get('tablelist', 'TableController@index')->name('tablelist');
		Route::get('tableadd', 'TableController@create')->name('tableadd');
		Route::post('tableset', 'TableController@store');
		Route::get('tableedit/{id}', 'TableController@edit');
		Route::post('tableupdate/{id}', 'TableController@update')->name('table.update');
		Route::get('tabledelete/{id}', 'TableController@destroy');


		/* chef router */
		Route::get('suplist', 'SupplierController@index')->name('suplist');
		Route::get('supadd', 'SupplierController@create')->name('supadd');
		Route::post('supset', 'SupplierController@store');
		Route::get('supedit/{id}', 'SupplierController@edit');
		Route::post('supupdate/{id}', 'SupplierController@update')->name('sup.update');
		Route::get('supdelete/{id}', 'SupplierController@destroy');
		
		/* Floor route */
			Route::get('floorlist', 'FloorController@index')->name('floorlist');
			
		/* Table route */
		Route::get('tablelist', 'TablelistController@index')->name('tablelist');
		Route::post('tableset', 'TablelistController@store')->name('table.set');
		Route::get('table_add', 'TablelistController@create')->name('table_add');
		Route::get('tbldelete/{id}', 'TablelistController@destroy');
		Route::get('tbledit/{id}', 'TablelistController@edit');
		Route::post('tableupdate/{id}', 'TablelistController@update')->name('table.update');

    });
});

/* admin group */
Route::group(['middleware'=>'isAdmin'],function(){
    Route::prefix('/')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');

    });
});

/* user group */
Route::group(['middleware'=>'isUser'],function(){
    Route::prefix('/')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'user'])->name('user.dashboard');

    });
});


	
Route::get('z','Sallu@zaher');
Route::get('e','Sallu@emran');
Route::get('b','Sallu@borhan');



