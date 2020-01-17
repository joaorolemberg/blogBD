<?php

namespace App\Entities;
/*
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
*/

use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Foundation\Auth\User as AuthenticaTable;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
/**
 * Class User.
 *
 * @package namespace App\Entities;
 */
/*
class User extends Model implements Transformable
{
    use TransformableTrait;


    protected $table ='users';
    protected $fillable = ['nome','username','password'];

}
*/

class User extends AuthenticaTable
{ 
    use TransformableTrait;


    protected $table ='users';
    protected $fillable = ['nome','username','password'];

}
