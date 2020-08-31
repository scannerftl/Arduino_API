<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Arduino extends Model
{
    protected $table = 'arduinos';
    protected $primaryKey = 'arduinoId';
    protected  $guarded = ['arduinoId'];
    /**
     * @var mixed
     */
    public $name;
    public $ipAddress ;
    public $localisation;
    public $visibility;

}
