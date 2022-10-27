<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class listController extends Controller
{
    //
    function list(){
        $usersList= Http::get('https://localhost:7000/api/usuarios')->json();
        return view('site.home',['usersList'=>$usersList]);
    }
}
