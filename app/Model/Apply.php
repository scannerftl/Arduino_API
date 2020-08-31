<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $table = 'applys';
    protected $primaryKey = 'applyId';
    protected  $guarded = ['applyId'];
    /**
     * @var mixed
     */
    public $methodId;
    public $componentId;



}
