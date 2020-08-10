<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidController extends Controller
{
    public function index() {
        return view('advertiser/bid/index');
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
