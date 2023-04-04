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
    return view('home', ['user' => [
        'name' => 'Мечников Ермолай Богданович',
        'age' => 32,
        'position' => 'г. Новоржев',
        'address' => 'ул. Вечерняя, дом 12, квартира 911'
    ]]);
});

Route::get('/contacts', function () {
    return view('contacts', ['user_contacts' => [
        'address' => 'ул. Вечерняя, дом 12, квартира 911',
        'post_code' => '663712',
        'email' => '',
        'phone' => '10(7460)886-73-76427'
    ]]);
});

Route::get('/userform', [\App\Http\Controllers\FormProcessor::class, 'index']);
Route::post('/store_form', [\App\Http\Controllers\FormProcessor::class, 'store']);

Route::get('/test_database', function () {

    $employe = new \App\Models\Employee();
    $employe->first_name = 'Иван';
    $employe->save();
    echo('Успех!');
});


Route::get('/get-employee-data', [\App\Http\Controllers\EmployeeController::class, 'index']);
Route::post('/store_form', [\App\Http\Controllers\EmployeeController::class, 'store'])->name('store-form');

Route::put('/user/{id}', [\App\Http\Controllers\EmployeeController::class, 'update']);
