<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
      public function Oredoo()
    {
        return $this->belongsTo('App\Cmd_Oredoo','cmd_orange_id');
    }
    public function Orange()
    {
        return $this->belongsTo('App\Cmd_Orange','cmd_orange_id');
    }
    public function Telecome()
    {
        return $this->belongsTo('App\Cmd_Telecome','cmd_telecome_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
