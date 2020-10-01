<?php

namespace App\Http\Controllers;

use App\Advertiser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class AdvertiserController extends Controller
{
    public function moderatorCreate()
    {
        return view('moderator.create_advertiser.create_advertiser');
    }

    public function moderatorStore(Request $request)
    {
//        dd(makeRandomToken());
        $advertiser = new Advertiser();
        $advertiser->name = $request->nickname;
        $advertiser->url_address = $request->link;
        $advertiser->category_id = $request->category;
        $advertiser->type_id = $request->type;
        $advertiser->save();

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
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
        $user->advertiser_id = $advertiser->id;
        $user->password = Hash::make(rand(0, 150000));
        $user->verified_code = rand(0, 1999999999);
        $user->save();


        return redirect()->route('moderator/advertiser/cases',['user'=> $user]);
    }

    public function moderatorCases(User $user)
    {
        $cases = $user->advertiser->getCases();

        return view('moderator.create_advertiser.create_case_for_advertiser', ['user' => $user, 'cases' => $cases]);
    }

    public function addCase($id)
    {
        $advertiser = Advertiser::find($id);

        
    }
}
