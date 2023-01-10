<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
	// fetch User
	$user = User::find(1);
	return view(welcome,$user);
    }
}
