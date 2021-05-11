<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class airTicker extends Controller
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
    public function airTickerOrder(){
        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $airTickerOrder = view('Admin_panel/airTickerOrder');
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $airTickerOrder)
            ->with('footer', $footer);

    }
    public function allAirTickerOrder(){
        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $allAirTickerOrder = view('Admin_panel/allAirTickerOrder');
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $allAirTickerOrder)
            ->with('footer', $footer);

    }
    public function airOrderdetails($id)
    {
        $fetchData = DB::table('airticket')->where('id',$id)->first();
        $m_id = $fetchData->m_id;
        $m_info = DB::table('merchant')->where('id',$m_id)->first();

        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $airOrderdetails = view('Admin_panel/airOrderdetails')
                            ->with('fetchData', $fetchData)
                            ->with('m_info', $m_info);
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $airOrderdetails)
            ->with('footer', $footer);
    }
    public function acceptairOrder($id)
    {
        $accept = DB::table('airticket')->where('id',$id)->update(['status'=>2,]);

        if ($accept){
            $notification = array(
                'message' => 'Order Accepted Successfully',
                'alert-type' => 'success'
            );
            return Redirect('airTickerOrder')->with($notification);
        }
        else
        {
            $notification = array(
                'message' => 'Something wrong',
                'alert-type' => 'error'
            );
            return Redirect('airTickerOrder')->with($notification);
        }
    }

}
