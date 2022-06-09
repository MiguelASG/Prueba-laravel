<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('estudiante','App\Http\Controllers\EstudianteController@getEstudiante');

Route::get('estudiante/{id}','App\Http\Controllers\EstudianteController@getEstudianteById');

Route::post('addEstudiante','App\Http\Controllers\EstudianteController@insertEstudiante');

Route::put('updateEstudiante/{id}','App\Http\Controllers\EstudianteController@updateEstudiante');

Route::delete('deleteEstudiante/{id}','App\Http\Controllers\EstudianteController@deleteEstudiante');


Route::get('materia','App\Http\Controllers\MateriaController@getMateria');

Route::get('materia/{id}','App\Http\Controllers\MateriaController@getMateriaById');

Route::post('addMateria','App\Http\Controllers\MateriaController@insertMateria');

Route::put('updateMateria/{id}','App\Http\Controllers\MateriaController@updateMateria');

Route::delete('deleteMateria/{id}','App\Http\Controllers\MateriaController@deleteMateria');

