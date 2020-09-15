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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/test/', function () {
//    return "!";
//});
//
//Route::get('/dir/test/', function () {
//    return '!!';
//});
//
//Route::get('/user/show-{id}/', function ($id) {
//    return $id;
//});
//
//Route::get('/user/{id?}/', function ($id = 0) {
//    return $id;
//})->where('id', '[0-9]+');
//
//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return $id . ' ' . $name;
//})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
//
////Route::get('/user/{id}/', function ($id) {
////    return "имя юзера :" . $id;
////});
//
//Route::get('//sum/{num1}/{num2}/', function ($num1, $num2) {
//    return $num1 + $num2;
//});
//
//Route::get('/articles/{date}/', function ($date) {
//    return $date;
//})->where('date', '[0-9]{4}-[0-9]{2}-[0-9]{2}');
//
//Route::get('/users/{order}/', function ($order) {
//    return $order;
//})->where('order', '(name)|(surname)|(age)');
//
//Route::get('/{year}/{month}/{day}/', function ($year, $month, $day) {
//    return $year . '/' . $month . '/' . $day;
//})->where(['year' => '[0-9]{4}', 'month' => '[0-9]{2}', 'day' => '[0-9]{2}']);


//Route::get('/test/form', 'TestController@form');
//Route::post('/test/result', 'TestController@result');
Route::match(['get', 'post'], 'test/form', 'TestController@form');
Route::get('/test/method/{param?}', 'TestController@method')
    ->where(['param' => '[0-9]+']);

Route::get('/test/show', 'TestController@show');
Route::get('/test/sum/{num1}/{num2}', 'TestController@sum')
    ->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

// PageController
Route::group(['prefix' => 'pages'], function () {
    Route::get('show/{id}', 'PageController@showOne')
        ->where('id', '[0-9]+');
    Route::get('all', 'PageController@showAll');
    Route::get('zzz', 'PageController@showOne');
});

// EmployeeController
Route::group(['prefix' => 'employee'], function () {
    Route::get('all', 'EmployeeController@all');
});


Route::match(['get', 'post'], 'test/show1', 'TestController@show1');
Route::match(['get', 'post'], 'test/result', 'TestController@result');
Route::match(['get', 'post'], 'test/show2', 'TestController@show2')->name('huyak');

Route::match(['get', 'post'], 'test/lizat-pizdu', 'TestController@lizatPizdu');

// user
Route::get('/user', 'UserController@index');
Route::get('/user/insert', 'UserController@insert');
Route::get('/user/delete', 'UserController@delete');
Route::get('/user/update', 'UserController@update');

// Employee
Route::get('/employee', 'EmployeeController@index');
