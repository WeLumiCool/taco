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

    public function profile() {
        $user = Auth::user();
        $advertiser = $user->advertiser;
        if ($advertiser->type_id == 2) {$cases = $advertiser->instagramcases;}
        else if ($advertiser->type_id == 3) {$cases = $advertiser->tiktokcases;}
        else if ($advertiser->type_id == 4) {$cases = $advertiser->youtubecases;}
        else if ($advertiser->type_id == 5) {$cases = $advertiser->vkontaktecases;}
        else if ($advertiser->type_id == 7) {$cases = $advertiser->radiocases;}
        else if ($advertiser->type_id == 8) {$cases = $advertiser->tvcases;}
        else if ($advertiser->type_id == 9) {$cases = $advertiser->onlinecases;}

        return view('advertiser.profile.profile',['user' => $user, 'cases' => $cases]);
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
