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
    return view('welcome');
});

Route::get('/curso', 'CursoController@index');

Route::get('/ex1', 'Dever1Controller@ex1');

Route::post('/ex1', 'Dever1Controller@resultado1');


Route::get('/ex2', 'Dever1Controller@ex2');
Route::post('/ex2', 'Dever1Controller@resultado2');

Route::get('/ex3', 'Dever1Controller@ex3');
Route::post('/ex3', 'Dever1Controller@resultado3');

Route::get('/ex4', 'Dever1Controller@ex4');
Route::post('/ex4', 'Dever1Controller@resultado4');

Route::get('/ex5', 'Dever1Controller@ex5');
Route::post('/ex5', 'Dever1Controller@resultado5');

Route::get('/ex6', 'Dever1Controller@ex6');
Route::post('/ex6', 'Dever1Controller@resultado6');

Route::get('/ex7', 'Dever1Controller@ex7');
Route::post('/ex7', 'Dever1Controller@resultado7');

Route::get('/ex8', 'Dever1Controller@ex8');
Route::post('/ex8', 'Dever1Controller@resultado8');

Route::get('/ex9', 'Dever1Controller@ex9');
Route::post('/ex9', 'Dever1Controller@resultado9');

Route::get('/ex10', 'Dever1Controller@ex10');
Route::post('/ex10', 'Dever1Controller@resultado10');

Route::get('/ex11', 'Dever1Controller@ex11');
Route::post('/ex11', 'Dever1Controller@resultado11');

Route::get('/ex12', 'Dever1Controller@ex12');
Route::post('/ex12', 'Dever1Controller@resultado12');

Route::get('/ex13', 'Dever1Controller@ex13');
Route::post('/ex13', 'Dever1Controller@resultado13');

Route::get('/ex14', 'Dever1Controller@ex14');
Route::post('/ex14', 'Dever1Controller@resultado14');

Route::get('/ex15', 'Dever1Controller@ex15');
Route::post('/ex15', 'Dever1Controller@resultado15');

Route::get('/ex16', 'Dever1Controller@ex16');
Route::post('/ex16', 'Dever1Controller@resultado16');

Route::get('/ex17', 'Dever1Controller@ex17');
Route::post('/ex17', 'Dever1Controller@resultado17');





//dever 1


Route::get('/curso', 'Curso2Controller@index');

Route::get('e1', 'Dever2Controller@e1');
Route::post('/e1', 'Dever2Controller@resultado1');

Route::get('/e2', 'Dever2Controller@e2');
Route::post('/e2', 'Dever2Controller@resultado2');

Route::get('/e3', 'Dever2Controller@e3');
Route::post('/e3', 'Dever2Controller@resultado3');

Route::get('/e4', 'Dever2Controller@e4');
Route::post('/e4', 'Dever2Controller@resultado4');

Route::get('/e5', 'Dever2Controller@e5');
Route::post('/e5', 'Dever2Controller@resultado5');

Route::get('/e6', 'Dever2Controller@e6');
Route::post('/e6', 'Dever2Controller@resultado6');

Route::get('/e7', 'Dever2Controller@e7');
Route::post('/e7', 'Dever2Controller@resultado7');

Route::get('/e8', 'Dever2Controller@e8');
Route::post('/ex', 'Dever2Controller@resultado8');

Route::get('/ex', 'Dever2Controller@e9');
Route::post('/ex', 'Dever2Controller@resultado9');