<?php

namespace App\Http\Controllers;

use App\CaseOnline;
use Illuminate\Http\Request;

class CaseOnlineController extends Controller
{
    public function online_calc(Request $request)
    {
//        dd($request->value);
        $cases = CaseOnline::where('price', '<=', $request->value)->get();

        $html = view('client.companies.tiktok.include_list',['cases' => $cases])->render();


        return response()->json([
            'status' => 'success',
            'html' => $html,
        ]);
    }
}
