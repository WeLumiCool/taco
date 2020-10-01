<?php

namespace App\Http\Controllers;

use App\AdvCompany;
use App\Advertiser;
use App\CaseInstagram;
use App\CaseOnline;
use App\CaseRadio;
use App\CaseTikTok;
use App\CaseTv;
use App\CaseVkontakte;
use App\CaseYoutube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index() {
        $advs = AdvCompany::where('user_id',Auth::user()->id)->get();

        return view('client/companies/index', ['advs' => $advs]);
    }

    public function offline() {
        return view('client/companies/offline');
    }

    public function online() {
        return view('client/companies/online');
    }

    public function radio()
    {
        $cases = CaseRadio::all();
//        dd($cases);

        return view('client.companies.radio.list',['cases' => $cases]);
    }

    public function tv()
    {
        $cases = CaseTv::all();

        return view('client.companies.tv.list', ['cases' => $cases]);
    }

    public function radio_show($id) {
        $company = Advertiser::find($id);
        $cases = $company->radiocases;
//        dd($cases);

        return view('client.companies.radio.show',['company' => $company, 'cases' => $cases]);
    }

    public function tiktok ()
    {
        $cases = CaseTikTok::all();

        return view('client.companies.tiktok.list', ['cases' => $cases]);
    }

    public function vk()
    {
        $cases = CaseVkontakte::all();

        return view('client.companies.vk.list', ['cases' => $cases]);
    }

    public function instagram()
    {
        $cases = CaseInstagram::all();

        return view('client.companies.instagram.list', ['cases' => $cases]);
    }

    public function youtube()
    {
        $cases = CaseYoutube::all();

        return view('client.companies.youtube.list', ['cases' => $cases]);
    }

    public function online_platform()
    {
        $cases = CaseOnline::all();

        return view('client.companies.online.list', ['cases' => $cases]);
    }

    public function tiktok_show($id)
    {
        $company = Advertiser::find($id);
//        dd($company->tiktokcases);
        $cases = $company->tiktokcases;

        return view('client.companies.tiktok.show', ['company' => $company, 'cases' => $cases]);
    }

    public function vk_show($id)
    {
        $company = Advertiser::find($id);
//        dd($company->tiktokcases);
        $cases = $company->vkontaktecases;

        return view('client.companies.vk.show', ['company' => $company, 'cases' => $cases]);
    }

    public function instagram_show($id)
    {
        $company = Advertiser::find($id);
//        dd($company->tiktokcases);
        $cases = $company->instagramcases;
//        dd($cases);

        return view('client.companies.instagram.show', ['company' => $company, 'cases' => $cases]);
    }

    public function youtube_show($id)
    {
        $company = Advertiser::find($id);
//        dd($company->tiktokcases);
        $cases = $company->youtubecases;
//        dd($cases);

        return view('client.companies.youtube.show', ['company' => $company, 'cases' => $cases]);
    }

    public function online_show($id)
    {
        $company = Advertiser::find($id);

        $cases = $company->onlinecases;
//        dd($cases);

        return view('client.companies.online.show', ['company' => $company, 'cases' => $cases]);
    }

    public function tv_show($id)
    {
        $company = Advertiser::find($id);

        $cases = $company->tvcases;
//        dd($cases);

        return view('client.companies.tv.show', ['company' => $company, 'cases' => $cases]);
    }
}
