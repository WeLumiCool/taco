<?php

namespace App\Http\Controllers;

use App\CaseTv;
use Illuminate\Http\Request;

class CaseTvController extends Controller
{
    public function tv_calc(Request $request)
    {
//        dd($request->value);
        $cases = CaseTv::where('price', '<=', $request->value)->get();

        $html = view('client.companies.tv.include_list',['cases' => $cases])->render();


        return response()->json([
            'status' => 'success',
            'html' => $html,
        ]);
    }
}
