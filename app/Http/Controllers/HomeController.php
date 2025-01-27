<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Location;

class HomeController extends Controller
{
    public function index(){

        $users = User::all();

        return view('user.details',[
            'users' => $users
        ]);
    }

    public function location(){
        $location = Location::all();
        return view('user.location',[
            'locations' => $location
        ]);
    }
}
