<?php

namespace App\Http\Controllers;

use App\CaseVkontakte;
use Illuminate\Http\Request;

class CaseVkontakteController extends Controller
{
    //
    public function vk_calc(Request $request)
    {
//        dd($request->value);
        $cases = CaseVkontakte::where('price', '<=', $request->value)->get();

        $html = view('client.companies.tiktok.include_list',['cases' => $cases])->render();


        return response()->json([
            'status' => 'success',
            'html' => $html,
        ]);
    }
}
