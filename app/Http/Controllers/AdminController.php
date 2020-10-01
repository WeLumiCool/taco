<?php

namespace App\Http\Controllers;

use App\Advertiser;
use App\CaseInstagram;
use App\CaseOnline;
use App\CaseRadio;
use App\CaseTikTok;
use App\CaseTv;
use App\CaseVkontakte;
use App\CaseYoutube;
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
            $advertiser->type_id = $request->typer;
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
        $types = Type::where('category_id',1)->get();

        return [
          'categories' => $categories,
          'types' => $types
        ];
    }

    public function TypeChange($id)
    {
            $types = Type::where('category_id', $id)->get();
            return $types;
    }

    public function getAdvertiserCases($id)
    {
        $advertiser = Advertiser::find($id);
        if ($advertiser->type_id == 2) {$cases = $advertiser->instagramcases;}
        else if ($advertiser->type_id == 3) {$cases = $advertiser->tiktokcases;}
        else if ($advertiser->type_id == 4) {$cases = $advertiser->youtubecases;}
        else if ($advertiser->type_id == 5) {$cases = $advertiser->vkontaktecases;}
        else if ($advertiser->type_id == 7) {$cases = $advertiser->radiocases;}
        else if ($advertiser->type_id == 8) {$cases = $advertiser->tvcases;}
        else if ($advertiser->type_id == 9) {$cases = $advertiser->onlinecases;}

        return [
            'cases' => $cases,
            'type' => $advertiser->type_id,
            'advertiser' => $advertiser
        ];


    }

    public function CaseStore(Request $request)
    {
        if ($request->case_type == 2) {$case = new CaseInstagram(); $case->price = $request->price; $case->type = $request->type; $case->advertiser_id = $request->id; $case->save();}
        else if ($request->case_type == 3) {$case = new CaseTikTok(); $case->price = $request->price; $case->advertiser_id = $request->id; $case->save();}
        else if ($request->case_type == 4) {$case = new CaseYoutube(); $case->price = $request->price; $case->name = $request->name; $case->desc = $request->desc; $case->advertiser_id = $request->id; $case->save();}
        else if ($request->case_type == 5) {$case = new CaseVkontakte(); $case->price = $request->price; $case->advertiser_id = $request->id; $case->save();}
        else if ($request->case_type == 7) {$case = new CaseRadio(); $case->price_weekdays = $request->price_weekdays; $case->price_weekend = $request->price_weekend; $case->time = $request->time; $case->advertiser_id = $request->id; $case->save();}
        else if ($request->case_type == 8) {$case = new CaseTv(); $case->time = $request->time; $case->type = $request->type; $case->price = $request->price; $case->desc = $request->desc; $case->category = $request->category; $case->advertiser_id = $request->id; $case->save();}
        else if ($request->case_type == 9) {$case = new CaseOnline(); $case->price = $request->price; $case->type = $request->type; $case->position = $request->position; $case->place = $request->place; $case->desc = $request->desc; $case->advertiser_id = $request->id; $case->save();}

        return;
    }

}
