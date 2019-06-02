<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Http\Requests\ClientRequest;


class ClientController extends Controller
{
    public function add_client(ClientRequest $request)
    {

	flash('client ajouter avec success')->success();
       Client::create($request->all());
       $clients=Client::all();
       return redirect()->route('dashbord',compact('clients'));
    }
    public function index()
    {
    	$clients=Client::all();
    	
    	return view ('Dashbord.index')
    	        ->with('clients',$clients);
    }
    public function Delete ($id)
    { 
      $client = Client::findOrFail($id);
    $client->delete();
      return back();
    }
}
