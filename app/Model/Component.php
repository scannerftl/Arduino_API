<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $table = 'components';
    protected $primaryKey = 'componentId';
    protected  $guarded = ['componentId'];

    /**
     * @var mixed
     */
    public $arduinoId;
    public $name;
    public $type;
    public $subtype;
    public $visibility;
}
