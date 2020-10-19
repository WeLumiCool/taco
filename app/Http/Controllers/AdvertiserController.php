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
use App\Type;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;

class AdvertiserController extends Controller
{
    public function moderatorCreate($name, $email, $phone)
    {
        return view('moderator.create_advertiser.create_advertiser',['name' => $name, 'email' => $email, 'phone' => $phone]);
    }

    public function moderatorStore(Request $request)
    {
//        dd($request->all());
//        dd(makeRandomToken());
        $advertiser = new Advertiser();
        $advertiser->name = $request->nickname;
        $advertiser->url_address = $request->link;
        $advertiser->category_id = $request->category;
        $advertiser->type_id = $request->type;
        $fieldtypes = $advertiser->type->fieldtypes;
        foreach ($fieldtypes as $fieldtype)
        {
            $col = collect(['title' => $fieldtype->name, 'value' => $request[$fieldtype->id]]);
            $temp = collect($advertiser->fields);
            $temp->push($col);
            $advertiser->fields = $temp;

        }
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

        return view('moderator.create_advertiser.create_new_case', ['advertiser' => $advertiser]);
    }

    public function storeCase(Request $request)
    {
//        dd($request->all());
        $advertiser = Advertiser::find($request->adv);

        if ($advertiser->type_id == 2) {$case = new CaseInstagram(); $case->price = $request->price; $case->type = $advertiser->type_id; $case->advertiser_id = $advertiser->id; $case->save();}
        else if ($advertiser->type_id == 3) {$case = new CaseTikTok(); $case->price = $request->price; $case->advertiser_id = $advertiser->id; $case->save();}
        else if ($advertiser->type_id == 4) {$case = new CaseYoutube(); $case->price = $request->price; $case->name = $request->name; $case->desc = $request->desc; $case->advertiser_id = $advertiser->id; $case->save();}
        else if ($advertiser->type_id == 5) {$case = new CaseVkontakte(); $case->price = $request->price; $case->advertiser_id = $advertiser->id; $case->save();}
        else if ($advertiser->type_id == 7) {$case = new CaseRadio(); $case->price_weekdays = $request->price_weekdays; $case->price_weekend = $request->price_weekend; $case->time = $request->time; $case->advertiser_id = $advertiser->id; $case->save();}
        else if ($advertiser->type_id == 8) {$case = new CaseTv(); $case->time = $request->time; $case->type = $request->kind; $case->price = $request->price; $case->desc = $request->desc; $case->category = $request->typeof; $case->advertiser_id = $advertiser->id; $case->save();}
        else if ($advertiser->type_id == 9) {$case = new CaseOnline(); $case->price = $request->price; $case->type = $request->type; $case->position = $request->position; $case->place = $request->place; $case->desc = $request->desc; $case->advertiser_id = $advertiser->id; $case->save();}

        return view('moderator.create_advertiser.create_case_for_advertiser', ['user' => $advertiser->user, 'cases' => $advertiser->getCases()]);
    }

    public function getFields(Request $request)
    {
        $type = $request->type;

        $html = view('moderator.create_advertiser.include.fields.instagram', [
            'fields' => Type::find($type)->fieldtypes,
        ])->render();

        return response()->json([
           'html' => $html,
        ]);
    }
}
