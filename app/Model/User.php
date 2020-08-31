<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'userId';
    protected  $guarded = ['userId'];

    /**
     * @var mixed
     */
    public $name;
    public $password;
    public $email;
    public $isAdmin;
    public $visibility;

}
