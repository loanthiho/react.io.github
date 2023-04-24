<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/average', function () {
    return view('average');
});

Route::post('/average', function (Illuminate\Http\Request $request) {
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $average = ($num1 + $num2) / 2;
    return "Điểm trung bình của $num1 và $num2 là $average.";
})->name('average');

// Route::get('/welcome',function(){
//     return 'caho ban den voi lop pnv';
// });
Route::get('/welcome' ,[App\Http\Controllers\UserController::class,'loan']);

Route::get('/loan', [App\Http\Controllers\UserController ::class,"index"]);
Route::post('/loan', [App\Http\Controllers\UserController ::class,"tinh"]);

Route::get('signup','signupController@index');
Route::post('sigup', 'signupController@displayInfor');



