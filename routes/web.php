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

Route::get('/test', function () {
    return view('pages.test');
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

/*
|--------------------------------------------------------------------------
| Users  router  middleware('auth:api')->
|--------------------------------------------------------------------------
*/
       // this route is use to get all Arduinos information
Route::middleware('auth:api')->get('/Arduinos',
    [
        'as'=>'getArduinos',
        'uses'=>'ArduinosController@getArduinos'
    ]);

        // this route is use to get information about specific arduino 
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}',
     [
         'as'=>'findArduino',
        'uses'=>'ArduinosController@getArduinoById'
    ]);


   // this router is use to get all sensors components from specific arduino
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/sensors',
    [
        'as' => 'getSensorsComponents',
        'uses' => 'ArduinosController@getSensorsComponents'
    ]);
    
    
    // this router is use to get all actuators components from specific arduino
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/actuators',
     [
        'as' => 'getActuatorsComponents',
        'uses' => 'ArduinosController@getActuatorsComponents'
     ]);

  // this router is use to get  information about specific sensors components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/sensors/{componentId}',
     [
        'as' => 'getSensorsComponentsByComponentId',
        'uses' => 'ArduinosController@getSensorsComponentsByComponentId'
    ]);
    
    
  // this router is use to get information about specific actuators components
    
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/actuators/{componentId}',
     [
       'as' => 'getActuatorsComponentsByComponentId',
       'uses' => 'ArduinosController@getActuatorsComponentsByComponentId'
     ]);

  //    this router is use to get  all methode about specific sensors components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/sensors/{componentId}/methods',
    [
        'as'=>'getMethodSensorsComponentsByComponentId',
        'uses'=>'ArduinosController@getMethodSensorsComponentsByComponentId'
    ]);

/*  
    sensor part
*/

 //    this router is use to get  specific  methode about specific sensors components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/sensors/{componentId}/methods/{methodId}',
  [
      'as'=>'getMethodSensor',
      'uses'=>'ArduinosController@getMethodSensor'
  ]);

//    this router is use to get  specific  execute Method about specific sensors components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/sensors/{componentId}/methods/{methodId}',
  [
      'as'=>'getexecuteMethodSensor',
      'uses'=>'ArduinosController@getexecuteMethodSensor'
  ]);

//    this router is use to get  specific  getData about specific sensors components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/sensors/{componentId}/methods/{methodId}',
  [
      'as'=>'getDataSensor',
      'uses'=>'ArduinosController@getDataSensor'
  ]);


//    this router is use to get  specific  sendData  about specific sensors components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/sensors/{componentId}/methods/{methodId}',
  [
      'as'=>'sendDataSensor',
      'uses'=>'ArduinosController@sendDataSensor'
  ]);


//    this router is use to get  specific  compute  about specific sensors components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/sensors/{componentId}/methods/{methodId}',
  [
      'as'=>'computeSensor',
      'uses'=>'ArduinosController@computeSensor'
  ]);


//    this router is use to  saveResultToDb  about specific sensors components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/sensors/{componentId}/methods/{methodId}',
  [
      'as'=>'saveResultToDbSensor',
      'uses'=>'ArduinosController@saveResultToDbSensor'
  ]);

//    this router is use to  sendResult  about specific sensors components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/sensors/{componentId}/methods/{methodId}',
  [
      'as'=>'sendResultSensor',
      'uses'=>'ArduinosController@sendResultSensor'
  ]);

/* 
Actuator part
*/

 //    this router is use to get  specific  methode about specific actuators components
 Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/actuators/{componentId}/methods/{methodId}',
 [
     'as'=>'getMethodActuator',
     'uses'=>'ArduinosController@getMethodActuator'
 ]);

//    this router is use to get  specific  execute Method about specific actuators components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/actuators/{componentId}/methods/{methodId}',
 [
     'as'=>'getexecuteMethodActuator',
     'uses'=>'ArduinosController@getexecuteMethodActuator'
 ]);

//    this router is use to get  specific  getData about specific actuators components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/actuators/{componentId}/methods/{methodId}',
 [
     'as'=>'getDataActuator',
     'uses'=>'ArduinosController@getDataActuator'
 ]);


//    this router is use to get  specific  sendData  about specific actuators components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/actuators/{componentId}/methods/{methodId}',
 [
     'as'=>'sendDataActuator',
     'uses'=>'ArduinosController@sendDataActuator'
 ]);


//    this router is use to get  specific  compute  about specific actuators components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/actuators/{componentId}/methods/{methodId}',
 [
     'as'=>'computeActuator',
     'uses'=>'ArduinosController@computeActuator'
 ]);


//    this router is use to  saveResultToDb  about specific actuators components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/actuators/{componentId}/methods/{methodId}',
 [
     'as'=>'saveResultToDbActuator',
     'uses'=>'ArduinosController@saveResultToDbActuator'
 ]);

//    this router is use to  sendResult  about specific actuators components
Route::middleware('auth:api')->get('/Arduinos/{arduinoId}/actuators/{componentId}/methods/{methodId}',
 [
     'as'=>'sendResultActuator',
     'uses'=>'ArduinosController@sendResultActuator'
 ]);

 /* 
 -----------------------------------------------------------------------------------------
 */

/*  
    sensor part
*/

 //    this router is use to put  specific  methode about specific sensors components
 Route::middleware('auth:api')->put('/Arduinos/{arduinoId}/sensors/{componentId}/methods/{methodId}',
 [
     'as'=>'putupdateMethodSensor',
     'uses'=>'ArduinosController@putupdateMethodSensor'
 ]);

//    this router is use to put  specific  execute Method about specific sensors components
Route::middleware('auth:api')->put('/Arduinos/{arduinoId}/sensors/{componentId}/methods/{methodId}',
 [
     'as'=>'putexecuteMethodSensor',
     'uses'=>'ArduinosController@putexecuteMethodSensor'
 ]);

//    this router is use to put  specific  putData about specific sensors components
Route::middleware('auth:api')->put('/Arduinos/{arduinoId}/sensors/{componentId}/methods/{methodId}',
 [
     'as'=>'putDataSensor',
     'uses'=>'ArduinosController@putDataSensor'
 ]);


//    this router is use to put  specific  sendData  about specific sensors components
Route::middleware('auth:api')->put('/Arduinos/{arduinoId}/sensors/{componentId}/methods/{methodId}',
 [
     'as'=>'putsendDataSensor',
     'uses'=>'ArduinosController@putsendDataSensor'
 ]);


//    this router is use to put  specific  compute  about specific sensors components
Route::middleware('auth:api')->put('/Arduinos/{arduinoId}/sensors/{componentId}/methods/{methodId}',
 [
     'as'=>'putcomputeSensor',
     'uses'=>'ArduinosController@putcomputeSensor'
 ]);


//    this router is use to  saveResultToDb  about specific sensors components
Route::middleware('auth:api')->put('/Arduinos/{arduinoId}/sensors/{componentId}/methods/{methodId}',
 [
     'as'=>'putsaveResultToDbSensor',
     'uses'=>'ArduinosController@putsaveResultToDbSensor'
 ]);

//    this router is use to  sendResult  about specific sensors components
Route::middleware('auth:api')->put('/Arduinos/{arduinoId}/sensors/{componentId}/methods/{methodId}',
 [
     'as'=>'putsendResultSensor',
     'uses'=>'ArduinosController@putsendResultSensor'
 ]);

/* 
Actuator part
*/

//    this router is use to put  specific  methode about specific actuators components
Route::middleware('auth:api')->put('/Arduinos/{arduinoId}/actuators/{componentId}/methods/{methodId}',
[
    'as'=>'putupdateMethodActuator',
    'uses'=>'ArduinosController@putupdateMethodActuator'
]);

//    this router is use to put  specific  execute Method about specific actuators components
Route::middleware('auth:api')->put('/Arduinos/{arduinoId}/actuators/{componentId}/methods/{methodId}',
[
    'as'=>'putexecuteMethodActuator',
    'uses'=>'ArduinosController@putexecuteMethodActuator'
]);

//    this router is use to put  specific  putData about specific actuators components
Route::middleware('auth:api')->put('/Arduinos/{arduinoId}/actuators/{componentId}/methods/{methodId}',
[
    'as'=>'putDataActuator',
    'uses'=>'ArduinosController@putDataActuator'
]);


//    this router is use to put  specific  sendData  about specific actuators components
Route::middleware('auth:api')->put('/Arduinos/{arduinoId}/actuators/{componentId}/methods/{methodId}',
[
    'as'=>'putsendDataActuator',
    'uses'=>'ArduinosController@putsendDataActuator'
]);


//    this router is use to put  specific  compute  about specific actuators components
Route::middleware('auth:api')->put('/Arduinos/{arduinoId}/actuators/{componentId}/methods/{methodId}',
[
    'as'=>'putcomputeActuator',
    'uses'=>'ArduinosController@putcomputeActuator'
]);


//    this router is use to  saveResultToDb  about specific actuators components
Route::middleware('auth:api')->put('/Arduinos/{arduinoId}/actuators/{componentId}/methods/{methodId}',
[
    'as'=>'putsaveResultToDbActuator',
    'uses'=>'ArduinosController@putsaveResultToDbActuator'
]);

//    this router is use to  sendResult  about specific actuators components
Route::middleware('auth:api')->put('/Arduinos/{arduinoId}/actuators/{componentId}/methods/{methodId}',
[
    'as'=>'putsendResultActuator',
    'uses'=>'ArduinosController@putsendResultActuator'
]);

/* 
 journalisation 
*/

    // this router is use to find   history  information by id
Route::get('/historics',
    [
        'as' => 'getHistoric',
        'uses' => 'ArduinosController@getHistoric'
    ]);

// this router is use to find   specific historic  information whit id
Route::get('/historics/{historicId}',
    [
        'as' => 'getHistoriById',
        'uses' => 'ArduinosController@getHistoriById'
    ]);

        // this router is use to delete historic  information
Route::delete('/historics',
    [
        'as' => 'deleteHistoric',
        'uses' => 'ArduinosController@deleteHistoric'
    ]);


    // this router is use to delete historic information
Route::delete('/historics/{historicId}',
     [
        'as' => 'deleteHistoricById',
        'uses' => 'ArduinosController@deleteHistoricById'
     ]);
    
    