<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

=======
use App\Cmd_Orange;
use App\Cmd_Oredoo;
use App\Cmd_Telecome;
use App\Commande;
>>>>>>> dev
class CommandeController extends Controller
{
    public function GetCommande($id)

    {
    	return view ('Dashbord.new-commande');
    }
<<<<<<< HEAD
=======
    public function PasseCommande(Request $request)

    {
    	//dd($request->all());
    	// create commande orange
    	$orange = new Cmd_Orange();
    	$orange->name_ligte_one_dinar="dinar orange";
    	$orange->quentity_one_dinar=$request->quentity_one_dinar_orange;
    	$orange->price_cmd_one_dinar=$request->quentity_one_dinar_orange*1250;
    	$orange->name_ligte_five_dinar="5 dinar orange";
    	$orange->quentity_five_dinar=$request->quentity_five_dinar_orange;
    	$orange->price_cmd_five_dinar=$request->quentity_five_dinar_orange*5700;
    	$orange->light_orange=$request->light_orange;
    	$orange->save();


    	// create commande oredoo

    	$oredoo = new Cmd_Oredoo();
    	$oredoo->name_ligte_one_dinar="dinar oredoo";
    	$oredoo->quentity_one_dinar=$request->quentity_one_dinar_oredoo;
    	$oredoo->price_cmd_one_dinar=$request->quentity_one_dinar_oredoo*1250;
    	$oredoo->name_ligte_five_dinar="5 dinar oredoo";
    	$oredoo->quentity_five_dinar=$request->quentity_five_dinar_orange;
    	$oredoo->price_cmd_five_dinar=$request->quentity_five_dinar_orange*5700;
    	$oredoo->light_oredoo=$request->light_oredoo;
    	$oredoo->save();
        
    	//create commande telecome
    	$telecome = new Cmd_Telecome();
    	$telecome->name_ligte_one_dinar="dinar telecome";
    	$telecome->quentity_one_dinar=$request->quentity_one_dinar_tt;
    	$telecome->price_cmd_one_dinar=$request->quentity_one_dinar_tt*1250;
    	$telecome->name_ligte_five_dinar="5 dinar telecome";
    	$telecome->quentity_five_dinar=$request->quentity_five_dinar_tt;
    	$telecome->price_cmd_five_dinar=$request->quentity_five_dinar_tt*5700;
    	$telecome->light_telecome=$request->light_telecome;
    	$telecome->save();
         
         // Reste de commande

    	$commande =new Commande();
    	$commande->price_total=($telecome->price_cmd_five_dinar + $telecome->price_cmd_one_dinar)
     +($oredoo->price_cmd_five_dinar + $oredoo->price_cmd_one_dinar)
    	+($orange->price_cmd_five_dinar + $orange->price_cmd_one_dinar);
    	$commande->numero_commande=1;
    	$commande->description=$request->description;
    	$commande->cmd_orange_id=$orange->id;
    	$commande->cmd_oredoo_id=$oredoo->id;
    	$commande->cmd_telecome_id=$telecome->id;
    	$commande->client_id=1;
    	$commande->prix_donnee=$request->avance;
    	$commande->pricx_recette=$request->Credi;
    	$commande->save();


    }
>>>>>>> dev
}
