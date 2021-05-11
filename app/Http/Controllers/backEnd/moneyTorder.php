<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class moneyTorder extends Controller
{
    public function AuthCheck()
    {
        $admin_name = Session::get('user_name');
        $email = Session::get('user_password');

        if ($admin_name) {
            return;
        }
        else
        {
            return Redirect::to('/super_admin')->send();
        }
    }
    public function moneyrOrder(){
        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $moneyrOrder = view('Admin_panel/moneyrOrder');
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $moneyrOrder)
            ->with('footer', $footer);

    }
    public function allMoneyOrder(){
        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $allMoneyOrder = view('Admin_panel/allMoneyOrder');
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $allMoneyOrder)
            ->with('footer', $footer);

    }

    public function moneyOrderdetails($id)
    {
        $fetchData = DB::table('money_order')->where('id',$id)->first();
        $m_id = $fetchData->m_id;
        $m_info = DB::table('merchant')->where('id',$m_id)->first();

        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $moneyOrderdetails = view('Admin_panel/moneyOrderdetails')
                            ->with('fetchData', $fetchData)
                            ->with('m_info', $m_info);
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $moneyOrderdetails)
            ->with('footer', $footer);
    }
    public function acceptmoneyOrder($id)
    {
        $accept = DB::table('money_order')->where('id',$id)->update(['status'=>2,]);

        if ($accept){
            $notification = array(
                'message' => 'Order Accepted Successfully',
                'alert-type' => 'success'
            );
            return Redirect('moneyOrder')->with($notification);
        }
        else
        {
            $notification = array(
                'message' => 'Something wrong',
                'alert-type' => 'error'
            );
            return Redirect('moneyOrder')->with($notification);
        }
    }
}
