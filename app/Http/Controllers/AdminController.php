<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
//    public function switch(Request $request) {
//        $type = $request->type;
//
//        if ($type == 'users') {
//            $users = User::where('role_id',2)->get();
//
//            $view = view('admin.pages.users', [
//                'users' => $users->reverse(),
//            ])->render();
//        }
//        if ($type == 'advertisers')
//        {
//            $users = User::where('role_id',3)->get();
//
//            $view = view('admin.pages.advertisers',[
//                'users' => $users->reverse(),
//            ])->render();
//        }
////        else if (){
////
////        }
//
//        return response()->json([
//           'html' => $view,
//        ]);
//    }

public function getUsers()
{
    $users = User::where('role_id', 2)->get();

    return $users;
}

    public function create_user()
    {
        return view('admin.create.user');
    }
}
