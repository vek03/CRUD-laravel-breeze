<?php

use App\Models\Agendamentos;
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
    $agends = new Agendamentos;
    $agends->name = 'Victor';
    $agends->tel = '(11)95995-5896';
    $agends->origin = 'Telefone';
    $agends->dt_ctt = '2023-03-17';
    $agends->observation = 'Espero que funcione.';
    $agends->save();

    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});
