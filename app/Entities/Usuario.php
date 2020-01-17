<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Usuario.
 *
 * @package namespace App\Entities;
 */
class Usuario extends Model implements Transformable
{
    use TransformableTrait;

    protected $table =  'usuarios';
    protected $fillable = ['nome','username','password'];
    

}
