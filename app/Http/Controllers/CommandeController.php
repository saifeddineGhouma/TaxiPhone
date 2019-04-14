<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

=======
use App\Cmd_Orange;
use App\Cmd_Oredoo;
use App\Cmd_Telecome;
use App\Commande;
<<<<<<< HEAD
>>>>>>> dev
=======
use App\Client;
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
    	// create commande orange
    	$orange = new Cmd_Orange();

    	//1dt orange 

    	$orange->name_ligte_one_dinar="dinar orange";
    	$orange->quentity_one_dinar=$request->quentity_one_dinar_orange;
    	$orange->price_cmd_one_dinar=$request->quentity_one_dinar_orange * $request->prix_one_dinar_orange;
     $orange->prix_dinar_orange=$request->prix_one_dinar_orange;
    	//light orange

    	$orange->light_orange=$request->light_orange;
    	$orange->prix_light_orange=$request->prix_light_orange;

    	//5dt orange

    	$orange->name_ligte_five_dinar="5 dinar orange";
    	$orange->quentity_five_dinar=$request->quentity_five_dinar_orange;
    	$orange->price_cmd_five_dinar=$request->quentity_five_dinar_orange*$request->prix_orange_sinque_dinar;
    	$orange->prix_sinque_dinar_orange	=$request->prix_orange_sinque_dinar;
    	$orange->save();


    	// create commande oredoo

    	$oredoo = new Cmd_Oredoo();

    	//1dt oredoo

    	$oredoo->name_ligte_one_dinar="dinar oredoo";
    	$oredoo->quentity_one_dinar=$request->quentity_one_dinar_oredoo;
    	$oredoo->price_cmd_one_dinar=$request->quentity_one_dinar_oredoo* $request->prix_one_dinar_oredoo;
    	$oredoo->prix_dinar_oredoo=$request->prix_one_dinar_oredoo;


    	//5dt oredoo

    	$oredoo->name_ligte_five_dinar="5 dinar oredoo";
    	$oredoo->quentity_five_dinar=$request->quentity_five_dinar_orange;
    	$oredoo->price_cmd_five_dinar=$request->quentity_five_dinar_orange*$request->prix_sinque_dinar_oredoo;
    	$oredoo->prix_sinque_dinar_oredoo=$request->prix_sinque_dinar_oredoo;

    	//light oredoo

    	$oredoo->light_oredoo=$request->light_oredoo;
    	$oredoo->prix_light_oredoo=$request->prix_light_oredoo;
    	$oredoo->save();
        
    	//create commande telecome

    	$telecome = new Cmd_Telecome();
   
    	//1dt telecome

    	$telecome->name_ligte_one_dinar="dinar telecome";
    	$telecome->quentity_one_dinar=$request->quentity_one_dinar_tt;
    	$telecome->price_cmd_one_dinar=$request->quentity_one_dinar_tt* $request->prix_one_dinar_tt;
    	$telecome->prix_dinar_telecome	=$request->prix_one_dinar_tt;
   
    	//5dt telecome

    	$telecome->name_ligte_five_dinar="5 dinar telecome";
    	$telecome->quentity_five_dinar=$request->quentity_five_dinar_tt;
    	$telecome->price_cmd_five_dinar=$request->quentity_five_dinar_tt*$request->prix_sinque_dinar_tt;
    	$telecome->prix_sinque_dinar_telecome=$request->prix_sinque_dinar_tt;

    	//light telecome

    	$telecome->light_telecome=$request->light_telecome;
    	$telecome->prix_light_telecome = $request->prix_light_tt;
    	$telecome->save();
         
         // Reste de commande

    	$commande =new Commande();
    	$commande->price_total=$request->total;
    	$commande->numero_commande=1;
    	$commande->description=$request->description;
    	$commande->cmd_orange_id=$orange->id;
    	$commande->cmd_oredoo_id=$oredoo->id;
    	$commande->cmd_telecome_id=$telecome->id;
    	$commande->client_id=$request->client_id;
    	$commande->prix_donnee=$request->avance;
    	$commande->pricx_recette=$request->total - $request->avance;
    	$commande->payee=$request->payee;
    	$commande->save();
    	 echo "success cmd";


<<<<<<< HEAD
    }
>>>>>>> dev
=======
	}
	
	public function liste_comande($id)
	{
		$commandes=Commande::where('client_id',$id)->get();
        $client=Client::findorfail($id);
		return view('Dashbord.liste_commande',compact('client'))
		        ->with('commandes',$commandes);
	}

	public function show_commande($id)
	{
		$commande=Commande::findorfail($id);
		return view('Dashbord.show-commande',compact('commande'));
	}
>>>>>>> dev
}
