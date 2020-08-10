<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index() {
        return view('client/finances/index');
    }

    public function index2() {
        return view('advertiser/finances/index');
    }
}
