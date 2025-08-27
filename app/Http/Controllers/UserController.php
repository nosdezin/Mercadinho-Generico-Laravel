<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    function Login(Request $request)
    {
        try {
            $ExisteConta = User::where("email", $request->email)->where('password', $request->password)->exists();
            if ($ExisteConta) {
                $id = User::where('email', $request->email)->get('id')->first()->id;
                return redirect()->route('user.account', ['id' => $id]);
            }
        } catch (\Exception $th) {
            return dd($th);
        }
    }

    function Register(Request $request)
    {
        User::create([
            'email' => $request->email,
            'password' => $request->password
        ]);
        $id = User::where('email', $request->email)->first()->id;
        return redirect()->route('user.account', ['id' => $id]);
    }

    function User($id)
    {
        $conta = User::find($id);
        return view('user.user', ['user' => $conta]);
    }

    function logout(){
        Session::forget('login');
        return redirect()->route('home');
    }
}
