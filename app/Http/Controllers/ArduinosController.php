<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArduinosController extends Controller
{
    
    // get Arduinos 

 public function getArduinos()
    {
        # code...
    }

    // find  arduino information by arduinoId

 public function getArduinoById($arduinoId)
    {
        # code...
    }

 // get all Sensors components in arduino
 public function getSensorsComponents($arduinoId)
 {
    # code...
 }

 // get all  actuators components in arduino
 public function getActuatorsComponents($arduinoId)
 {
   # code...
 }


 // get specific sensors components   whit componentId
 public function getSensorsComponentsByComponentId($arduinoId,$componentId)
 {
        # code...
 }

 // get specific actuators components   whit componentId
public function getActuatorsComponentsByComponentId($arduinoId,$componentId)
{
        # code...
}

// get method of specific sensors components   whit componentId
public function getMethodSensorsComponentsByComponentId($arduinoId,$componentId)
{
    # code...
}

// get method of specific actuators components   whit componentId
public function getMethodActuatorsComponentsByComponentId($arduinoId,$componentId)
{
    # code...  
}

/*  
 Sensors part 
*/
// get specific method of specific Sensors components   whit componentId
public function getMethodSensor($arduinoId,$componentId,$methodId)
{
    # code...
}

// get specific execution method of specific Sensors components   whit componentId
public function getexecuteMethodSensor($arduinoId,$componentId,$methodId)
{
    # code...
}
// get specific getData of specific Sensors components   whit methodtId
public function getDataSensor($arduinoId,$componentId,$methodId)
{
    # code...
}

// get specific sendData of specific Sensors components   whit methodtId
public function sendDataSensor($arduinoId,$componentId,$methodId)
{
    # code...
}

// get specific compute of specific Sensors components   whit methodtId
public function computeSensor($arduinoId,$componentId,$methodId)
{
    # code...
}

// get specific save resul of specific Sensors components   whit methodtId
public function saveResultToDbSensor($arduinoId,$componentId,$methodId)
{
    # code...
}

// get specific send resul of specific Sensors components   whit methodtId
public function sendResultSensor($arduinoId,$componentId,$methodId)
{
    # code...
}

/*  
 Actuator part 
*/
// get specific method of specific Actuator components   whit componentId
public function getMethodActuator($arduinoId,$componentId,$methodId)
{
    # code...
}

// get specific execution method of specific Actuator components   whit componentId
public function getexecuteMethodActuator($arduinoId,$componentId,$methodId)
{
    # code...
}
// get specific getData of specific Actuator components   whit methodtId
public function getDataActuator($arduinoId,$componentId,$methodId)
{
    # code...
}

// get specific sendData of specific Actuator components   whit methodtId
public function sendDataActuator($arduinoId,$componentId,$methodId)
{
    # code...
}

// get specific compute of specific Actuator components   whit methodtId
public function computeActuator($arduinoId,$componentId,$methodId)
{
    # code...
}

// get specific save resul of specific Actuator components   whit methodtId
public function saveResultToDbActuator($arduinoId,$componentId,$methodId)
{
    # code...
}

// get specific send resul of specific Actuator components   whit methodtId
public function sendResultActuator($arduinoId,$componentId,$methodId)
{
    # code...
}

/* 
-----------------------------------------------------------------
*/

/*  
 Sensors part 
*/
// put specific method of specific Sensors components   whit componentId
public function putupdateMethodSensor($arduinoId,$componentId,$methodId)
{
    # code...
}

// put specific execution method of specific Sensors components   whit componentId
public function putexecuteMethodSensor($arduinoId,$componentId,$methodId)
{
    # code...
}
// put specific putData of specific Sensors components   whit methodtId
public function putDataSensor($arduinoId,$componentId,$methodId)
{
    # code...
}

// put specific sendData of specific Sensors components   whit methodtId
public function putsendDataSensor($arduinoId,$componentId,$methodId)
{
    # code...
}

// put specific compute of specific Sensors components   whit methodtId
public function putcomputeSensor($arduinoId,$componentId,$methodId)
{
    # code...
}

// put specific save resul of specific Sensors components   whit methodtId
public function putsaveResultToDbSensor($arduinoId,$componentId,$methodId)
{
    # code...
}

// put specific send resul of specific Sensors components   whit methodtId
public function putsendResultSensor($arduinoId,$componentId,$methodId)
{
    # code...
}

/*  
 Actuator part 
*/
// put specific method of specific Actuator components   whit componentId
public function putupdateMethodActuator($arduinoId,$componentId,$methodId)
{
    # code...
}

// put specific execution method of specific Actuator components   whit componentId
public function putexecuteMethodActuator($arduinoId,$componentId,$methodId)
{
    # code...
}
// put specific putData of specific Actuator components   whit methodtId
public function putDataActuator($arduinoId,$componentId,$methodId)
{
    # code...
}

// put specific sendData of specific Actuator components   whit methodtId
public function putsendDataActuator($arduinoId,$componentId,$methodId)
{
    # code...
}

// put specific compute of specific Actuator components   whit methodtId
public function putcomputeActuator($arduinoId,$componentId,$methodId)
{
    # code...
}

// put specific save resul of specific Actuator components   whit methodtId
public function putsaveResultToDbActuator($arduinoId,$componentId,$methodId)
{
    # code...
}

// put specific send resul of specific Actuator components   whit methodtId
public function putsendResultActuator($arduinoId,$componentId,$methodId)
{
    # code...
}

/*
----------------------------------------------------------------------------------------------
*/

// get all journalisation 

public function getHistoric()
{
    # code...
}

// get specific  journalisation 

public function getHistoriById($historicId)
{
    # code...
}

// delete all journalisation 

public function deleteHistoric()
{
    # code...
}

// delete specific  journalisation 

public function deleteHistoricById($historicId)
{
    # code...
}



}

