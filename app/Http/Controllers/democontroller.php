<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class democontroller extends Controller
{
    public function withparam($name){
        return "<h1>$name</h1>";
    }
}