<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndividualBusinessController extends Controller
{
    public function individualReg(){
        return view('web.individualbusiness');
    }
}
