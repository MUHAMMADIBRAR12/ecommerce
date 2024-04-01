<?php
namespace App\Http\Controllers\webControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class IndividualBusinessController extends Controller
{
    public function individualReg(){
        return view('web.individualbusiness');
    }
}
