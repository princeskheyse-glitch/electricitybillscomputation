<?php
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElectricityBillController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/faculty',[FacultyController::class , 'index']);


Route::get('/greet', function(){
    $name = request('name');
    $age =  request('age');

    return "Hello $name, age $age";

});
Route::get('/title',[userController::class , 'index']);

Route::get('/electricitybills', [ElectricityBillController::class, 'compute']);
