<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    protected $table = 'methods';
    protected $primaryKey = 'methodId';
    protected  $guarded = ['methodId'];

    /**
     * @var mixed
     */
    public $name;
    public $parameters;
    public $appliedTo;
    public $visibility;
}
