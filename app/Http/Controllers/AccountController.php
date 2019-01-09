<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAccount;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function loginForm() {
        return view('login');
    }

    public function registerForm() {
        return view('register');
    }

    public function login(Request $request) {
        $account = Account::where('email', 'LIKE', $request->email)->first();
        if($account == null) return ['redirect' => '', 'error' => 'Email or password incorrect', 'user' => ''];
        
        else {
            if(Hash::check($request->password, $account->password)) return ['redirect' => '/home', 'error' => '', 'user' => $account->email];
            else return ['redirect' => '', 'error' => 'Email or password incorrect', 'user' => ''];
        }
    }

    public function register(StoreAccount $request) {
        $request->validated();
        $account = new Account();
        $account->setAttribute('email', $request->email);
        $account->setAttribute('password', bcrypt($request->password));
        $account->save();
        return response(["message" => "Account created", "account"=> $account->id]);
    }
}
