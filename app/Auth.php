<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    //
    use SoftDeletes;
    protected $table = 'users';
}
