<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $html = file_get_html('https://www.akchabar.kg/ru/exchange-rates/');

        $html->find('div',1)->id = 'rates';
        dd($html->find('div',1)->id = 'rates');

        return view('welcome');
    }

    public function calendar() {
        return view('advertiser.calendar.index');
    }
}
