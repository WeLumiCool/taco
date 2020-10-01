<?php

namespace App\Http\Controllers;

use App\CaseYoutube;
use Illuminate\Http\Request;

class CaseYoutubeController extends Controller
{
    public function youtube_calc(Request $request)
    {
//        dd($request->all());
        if ($request->type == "Любой")
        {
            $cases = CaseYoutube::where('price', '<', $request->value + 1)->get();
        }
        else
        {
            $cases = CaseYoutube::where('price', '<', $request->value + 1)->where('name', $request->type)->get();
        }

        $html = view('client.companies.youtube.include_list',['cases' => $cases])->render();

        return response()->json([
            'status' => 'success',
            'html' => $html,
        ]);
    }
}
