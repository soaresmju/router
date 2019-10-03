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
    return '<h1>Caminho 1</h1> <a href="./c2"><button type="" > Próximo</button></a>';
});

Route::get('/c2', function () {
    return '<h2>Caminho 2</h2> <a href="./"><button type="" >Voltar</button></a>   <a href ="./c3"><button type="" > Próximo</button></a>';
});

Route::get('/c3', function () {
    return '<h3>Caminho 3</h3> <a href="./"><button> Caminho 1</button></a>    <a href="./c2"><button> Caminho 2</button></a>';
});