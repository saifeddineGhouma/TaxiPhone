<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cmd_Orange extends Model
{
  public function Commande()
    {
        return $this->hasOne('App\Commande');
    }
}
