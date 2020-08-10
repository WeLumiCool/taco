<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index() {
        return view('client/companies/index');
    }

    public function offline() {
        return view('client/companies/offline');
    }

    public function online() {
        return view('client/companies/online');
    }
}
