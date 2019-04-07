<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Http\Requests\ClientRequest;


class ClientController extends Controller
{
    public function add_client(ClientRequest $request)
    {

	flash('إضافة العميل مع النجاح')->success();
       Client::create($request->all());
       return redirect()->route('dashbord');
    }
    public function index()
    {
    	$clients=Client::all();
    	
    	return view ('Dashbord.index')
    	        ->with('clients');
    }
}
