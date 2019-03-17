<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
     protected $fillable = [
        'name', 'first_name', 'phone','work','adresse','user_id'
    ];
}
