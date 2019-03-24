<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cmd_Oredoo extends Model
{
    public function Commande()
    {
        return $this->hasOne('App\Commande');
    }
}
