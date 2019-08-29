<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registered extends Model
{
    //
    protected $fillable=['Username','email','Password','ConfirmPassword'];
}
