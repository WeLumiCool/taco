<?php

namespace App\Http\Controllers;

use App\CaseRadio;
use Illuminate\Http\Request;

class CaseRadioController extends Controller
{
    public function radio_calc(Request $request)
    {
//        dd($request->value);
        $cases = CaseRadio::where('price_weekdays', '<=', $request->value)->orWhere('price_weekend', '<=', $request->value)->get();

        $html = view('client.companies.radio.include_list',['cases' => $cases])->render();


        return response()->json([
            'status' => 'success',
            'html' => $html,
        ]);
    }
}
