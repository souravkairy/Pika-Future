<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;


class merchant extends Controller
{
    public function mAuthCheck()
    {
        $merchantName = Session::get('user_name');
        $password = Session::get('user_password');

        if ($merchantName) {
            return;
        }
        else
        {
            return Redirect::to('/merchant')->send();
        }
    }
    public function index()
    {
        $this->mAuthCheck();
        $header = view('Merchant_panel/header');
        $sidebar = view('Merchant_panel/sidebar');
        $dashboard = view('Merchant_panel/dashboard');
        $footer = view('Merchant_panel/footer');
        return view('Merchant_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $dashboard)
            ->with('footer', $footer);
    }

}
