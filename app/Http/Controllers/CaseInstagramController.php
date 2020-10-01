<?php

namespace App\Http\Controllers;

use App\CaseInstagram;
use Illuminate\Http\Request;

class CaseInstagramController extends Controller
{

    public function instagram_calc(Request $request)
    {

//        $request->price = (int)$request->price;
//        dd($request->all());
        if ($request->type == "Любой")
        {
            $cases = CaseInstagram::where('price', '<', $request->value + 1)->get();
        }
        else
        {
            $cases = CaseInstagram::where('price', '<', $request->value + 1)->where('type', $request->type)->get();
        }


        $html = view('client.companies.instagram.include_list',['cases' => $cases])->render();


        return response()->json([
            'status' => 'success',
            'html' => $html,
        ]);
    }
}
