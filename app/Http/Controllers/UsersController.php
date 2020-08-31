<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArduinosRequest;
use App\Model\Arduino;

use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    // add arduino in database
    public function addArduino(ArduinosRequest  $request,Arduino $arduino)
    {
      //  $arduino = new Arduino() ;
        $arduino->name= $request->input('name');
        $arduino->ipAddress=$request->input('ipaddress');
        $arduino->save();

        return view('welcome') ;
    }

    //  get all  arduinos  information
    public function getArduino()
    {
		//
	}

	// find  arduino information by arduinoId
    public function getArduinoById($arduinoId)
    {
        //
    }

    // update   arduino information whit arduinoId
    public function updateArduino($arduinoId)
    {
        //
    }

    // delete   arduino in system whit arduinoId
    public function deleteArduino($arduinoId)
    {
        //
    }

    // get all sensors components in arduino
    public function getSensorsComponents()
    {
        //
    }

    // get all  actuators components in arduino
    public function getActuatorsComponents()
    {
        //
    }

    // get specific sensors components   whit componentId
    public function getSensorsComponentsByComponentId($arduinoId,$componentId)
    {
        //
    }

    // get specific actuators components   whit componentId
    public function getActuatorsComponentsByComponentId($arduinoId,$componentId)
    {
        //
    }

        // enabled  specific sensors  components   whit componentId
    public function enabledSensorsComponentsByComponentId($arduinoId,$componentId)
    {
        //
    }

         // enabled  specific sensors  components   whit componentId
    public function enabledActuatorsComponentsComponentId($arduinoId,$componentId)
    {
        //
    }

         // disabled   specific sensors  components   whit componentId
    public function disabledSensorsComponentsByComponentId($arduinoId,$componentId)
    {
        //
    }

       // disabled  specific sensors  components   whit componentId
    public function disabledActuatorsComponentsComponentId($arduinoId,$componentId)
    {
        //
    }

        // add user  in database
    public function  addUser()
    {
        //
    }

    // select  user  in database
    public function  getUser()
    {
        //
    }

    // find   user  in database
    public function  findUserById($userId)
    {
        //
    }


    // delete   user  in database
    public function  deleteUserById($userId)
    {
        //
    }

    // add Arduino To User  in system
    public function  addArduinoToUser($userId)
    {
        //
    }

    // delete Arduino To User  in system
    public function  deleteArduinoToUser($userId,$arduinoId)
    {
        //
    }


}
