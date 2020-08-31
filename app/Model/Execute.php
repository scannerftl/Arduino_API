<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Execute extends Model
{
    protected $table = 'executes';
    protected $primaryKey = 'executeId';
    protected  $guarded = ['executeId'];

    /**
     * @var mixed
     */
    public $userId;
    public $methodId;
    public $result;
}
