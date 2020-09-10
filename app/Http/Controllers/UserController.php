<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function term()
    {
        return view('term_of_use');
    }

    public function edit() {
        $user = Auth::user();

        return view('client.profile.edit',['user' => $user]);
    }

    public function admin() {
        return view('admin.index');
    }

    public function EmailCheck(Request $request)
    {
        $user = User::where('email',$request->email)->get()->first();
        $check = 0;
        if ($user) {
            $check = 1;
        }

        return $check;
    }

    public function PhoneCheck(Request $request)
    {
        $user = User::where('phone',$request->phone)->get()->first();
        $check = 0;
        if ($user) {
            $check = 1;
        }

        return $check;
    }
}
