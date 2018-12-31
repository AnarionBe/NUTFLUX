<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TraitementController extends Controller
{
    public function redirectUser ()
    {
        $sessionNbr = $_GET['user'];
    //dd($sessionNbr);
    if ($sessionNbr==1) {
        return view('usr1_session');
    }
    elseif ($sessionNbr==2) {
        return view('usr2_session');
    }
    else {
        return view('usr3_session');
    }
    }
}
