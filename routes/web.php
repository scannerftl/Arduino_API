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

        // home page router
Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| administrator  router
|--------------------------------------------------------------------------
*/
        // this router is use to add Arduinos in databases
Route::post('/admin/Arduinos',
[
    'as' => 'addArduino',
    'uses' => 'UsersController@addArduino'
]);
        // this router is use to get all  Arduinos information
Route::get('/admin/Arduinos',
[
    'as' => 'getArduino',
    'uses' => 'UsersController@getArduino'
]);

        // this router is use to find   Arduinos information by id
Route::get('/admin/Arduinos/{arduinoId}',
    [
        'as' => 'findArduino',
        'uses' => 'UsersController@getArduinoById'
    ]);


        // this router is use to update Arduinos information
Route::put('/admin/Arduinos/{arduinoId}',
    [
        'as' => 'updateArduino',
        'uses' => 'UsersController@updateArduino'
    ]);

        // this router is use to delete Arduinos in system
Route::delete('/admin/Arduinos/{arduinoId}',
    [
        'as' => 'deleteArduino',
        'uses' => 'UsersController@deleteArduino'
    ]);

        // this router is use to get all sensors components from specific arduino
Route::get('/admin/Arduinos/{arduinoId}/sensors',
    [
        'as' => 'getSensorsComponents',
        'uses' => 'UsersController@getSensorsComponents'
    ]);


        // this router is use to get all actuators components from specific arduino
Route::get('/admin/Arduinos/{arduinoId}/actuators',
    [
        'as' => 'getActuatorsComponents',
        'uses' => 'UsersController@getActuatorsComponents'
    ]);

        // this router is use to get  information about specific sensors components
Route::get('/admin/Arduinos/{arduinoId}/sensors/{componentId}',
    [
        'as' => 'getSensorsComponentsByComponentId',
        'uses' => 'UsersController@getSensorsComponentsByComponentId'
    ]);


        // this router is use to get information about specific actuators components

Route::get('/admin/Arduinos/{arduinoId}/sensors/{componentId}',
    [
        'as' => 'getActuatorsComponentsByComponentId',
        'uses' => 'UsersController@getActuatorsComponentsByComponentId'
    ]);

        // this router is use to enabled specific sensors  components
Route::post('/admin/Arduinos/{arduinoId}/sensors/{componentId}',
    [
        'as'=> 'enabledSensorsComponentsByComponentId',
        'uses'=>'UsersController@enabledSensorsComponentsByComponentId'
    ]);


        // this router is use to enabled specific actuators   components
Route::post('/admin/Arduinos/{arduinoId}/actuators/{componentId}',
    [
        'as'=> 'enabledActuatorsComponentsComponentId',
        'uses'=>'UsersController@enabledActuatorsComponentsComponentId'
    ]);


        // this router is use to disabled specific sensors  components
Route::delete('/admin/Arduinos/{arduinoId}/sensors/{componentId}',
    [
        'as'=> 'disabledSensorsComponentsByComponentId',
        'uses'=>'UsersController@disabledSensorsComponentsByComponentId'
    ]);


        // this router is use to disabled  specific actuators   components
Route::delete('/admin/Arduinos/{arduinoId}/actuators/{componentId}',
    [
        'as'=> 'disabledActuatorsComponentsComponentId',
        'uses'=>'UsersController@disabledActuatorsComponentsComponentId'
    ]);


        // this router is use to add users  in databases
Route::post('/admin/users',
    [
        'as' => 'addUser',
        'uses' => 'UsersController@addUser'
    ]);
        // this router is use to get all  users  information
Route::get('/admin/users',
    [
        'as' => 'getUser',
        'uses' => 'UsersController@getUser'
    ]);


        // this router is use to find   user  information by id
Route::get('/admin/users/{userId}',
    [
        'as' => 'findUser',
        'uses' => 'UsersController@findUserById'
    ]);


        // this router is use to delete user  information
Route::delete('/admin/users/{userId}',
    [
        'as' => 'deleteUser',
        'uses' => 'UsersController@deleteUserById'
    ]);


        // this router is use to add Arduino To User in system
Route::post('/admin/users/{userId}/Arduinos',
    [
        'as' => 'addArduinoToUser',
        'uses' => 'UsersController@addArduinoToUser'
    ]);

        // this router is use to delete Arduino To User
Route::delete('/admin/users/{userId}/Arduinos/{arduinoId}',
    [
        'as' => 'deleteArduinoToUser',
        'uses' => 'UsersController@deleteArduinoToUser'
    ]);

