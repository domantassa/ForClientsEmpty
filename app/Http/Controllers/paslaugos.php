<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class paslaugos extends Controller
{
    public function paslaugos() {
        $notif = Auth()->User()->notifications()->get();
        return view('paslaugos',['user' => Auth()->User(), 'users' => User::all(), 'notif' => $notif]);
    }
    
}
