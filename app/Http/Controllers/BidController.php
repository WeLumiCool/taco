<?php

namespace App\Http\Controllers;

use App\AdvCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BidController extends Controller
{
    public function index() {
        $advs = AdvCompany::where('advertiser_id', Auth::user()->advertiser->id)->get();

        return view('advertiser/bid/index',['advs' => $advs]);
    }

    public function market() {
        return view('advertiser/bid/market');
    }

    public function show() {
        return view('advertiser/bid/show');
    }

    public function market_show() {
        return view('advertiser/bid/market_show');
    }
}
