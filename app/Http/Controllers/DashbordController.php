<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commande;
use App\Cmd_Orange;
use App\Cmd_Telecome;
use App\Cmd_Oredoo;
use App\Client;
class DashbordController extends Controller
{
    public function passe_commande(Request $request)
    {
       
    }

    public function commandes_client($id)
    {
    	return view('Dashbord.liste_commande');
    }
}
