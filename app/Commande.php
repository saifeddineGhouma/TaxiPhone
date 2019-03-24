<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
      public function Oredoo()
    {
        return $this->belongsTo('App\Cmd_Oredoo');
    }
    public function Orange()
    {
        return $this->belongsTo('App\Cmd_Orange');
    }
    public function Telecome()
    {
        return $this->belongsTo('App\Cmd_Telecome');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
