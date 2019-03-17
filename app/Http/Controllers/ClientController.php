<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function add_client(Request $request)
    {
    	flash('إضافة العميل مع النجاح')->success();
       Client::create($request->all());
       return redirect()->route('dashbord');
    }
}
