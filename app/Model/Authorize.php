<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Authorize extends Model
{
    protected $table = 'authorizes';
    protected $primaryKey = 'authorizeId';
    protected  $guarded = ['authorizeId'];

    /**
     * @var mixed
     */
    public $userId;
    public $arduinoId;
}
