<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function GetCommande($id)

    {
    	return view ('Dashbord.new-commande');
    }
}
