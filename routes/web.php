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



Route::get('/', function () {
    return "Test";
});
/*
      Cheak Connnection
*/
Route::get('check-connect', function () {
    if (DB::connection()->getDatabaseName()) {
        return "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
    } else {
        return 'Connection False !!';
    }
});


/*
  Working
*/
Route::get('all/restore/{id}', 'CattalogController@restone_all');
Route::resource('all', 'CattalogController');
