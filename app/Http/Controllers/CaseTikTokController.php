<?php

namespace App\Http\Controllers;

use App\CaseTikTok;
use Illuminate\Http\Request;

class CaseTikTokController extends Controller
{
    //

    public function tiktok_calc(Request $request)
    {
//        dd($request->value);
        $cases = CaseTikTok::where('price', '<=', $request->value)->get();

        $html = view('client.companies.tiktok.include_list',['cases' => $cases])->render();


        return response()->json([
            'status' => 'success',
            'html' => $html,
        ]);
    }
}
