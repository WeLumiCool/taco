<?php

namespace App\Http\Controllers;

use App\Advertiser;
use App\Category;
use App\Type;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

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

public function getUser($id)
{
        $user = User::find($id);

        return $user;
}

    public function create_user()
    {
        return view('admin.create.user');
    }

    public function UserStore(Request $request)
    {
//        dd($request->all());
        $user = new User();
        if ($request->type == 1) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->company = $request->company;
            $user->position = $request->position;
            $user->password = Hash::make($request->password);
            if ($request->avatar != null || $request->avatar != 'null' || $request->avatar != 'underfined') {
                $avatar = $request->avatar;
                $fileName = 'users/' . uniqid('users_avatar') . '.jpg';
                $image = ImageManagerStatic::make($avatar);

                $image = $image->resize(500, null, function ($constraint) {
                    return $constraint->aspectRatio();
                })
                    ->stream('jpg', 80);

                Storage::disk('local')->put('public/' . $fileName, $image);
                $user->avatar = $fileName;
            }
            $user->role_id = 2;
        }
        else
        {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);
            if ($request->avatar != null || $request->avatar != 'null' || $request->avatar != 'underfined') {
                $avatar = $request->avatar;
                $fileName = 'users/' . uniqid('users_avatar') . '.jpg';
                $image = ImageManagerStatic::make($avatar);

                $image = $image->resize(500, null, function ($constraint) {
                    return $constraint->aspectRatio();
                })
                    ->stream('jpg', 80);

                Storage::disk('local')->put('public/' . $fileName, $image);
                $user->avatar = $fileName;
            }
            $user->role_id = 3;
            $advertiser = new Advertiser();
            $advertiser->name = $request->nickname;
            $advertiser->url_address = $request->url;
            $advertiser->category_id = $request->category;
            $advertiser->type_id = $request->type;
            $advertiser->save();
            $user->advertiser_id = $advertiser->id;
        }
        $user->save();

        return response()->json([
            'status' => 'success',
        ]);
    }




    public function getAdvertisers()
    {
        $users = User::where('role_id', 3)->With('advertiser.category','advertiser.type')->get();

        return $users;
    }

    public function DataForAdvertiser()
    {
        $categories = Category::all();
        $types = Type::all();

        return [
          'categories' => $categories,
          'types' => $types
        ];
    }

}
