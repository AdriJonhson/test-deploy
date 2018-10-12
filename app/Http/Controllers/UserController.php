<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
    	dd(request()->ip());
    	return view('welcome')->withSuccess('mensagem sucesso');
    }
}
