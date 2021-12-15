<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wopcontroller extends Controller
{
    public function withoutparam(){
        return "<h1> Controller without parameters </h1>";
    }
}