<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAccount;

class AccountController extends Controller
{
    public function loginForm() {
        return view('login');
    }

    public function login(Request $request) {
        $account = Account::where('email', $request->email)->first();
        if($account == null) return ['redirect' => '', 'error' => 'Email or password incorrect', 'user' => ''];
        //TODO: pass $request->password trought bcrypt() (after register made)
        else {
            if(strcmp($request->password, $account->password) == 0) return ['redirect' => '/home', 'error' => '', 'user' => $account->email];
            else return ['redirect' => '', 'error' => 'Email or password incorrect', 'user' => ''];
        }
    }
}
