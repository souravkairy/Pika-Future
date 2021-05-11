<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class parcel extends Controller
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
    public function parcelrOrder(){
        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $parcelrOrder = view('Admin_panel/parcelrOrder');
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $parcelrOrder)
            ->with('footer', $footer);

    }
    public function allParcelOrder(){
        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $allParcelOrder = view('Admin_panel/allParcelOrder');
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $allParcelOrder)
            ->with('footer', $footer);

    }
    public function parcelOrderdetails($id)
    {
        $fetchData = DB::table('parcel_delivery')->where('id',$id)->first();
        $m_id = $fetchData->m_id;
        $m_info = DB::table('merchant')->where('id',$m_id)->first();

        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $parcelOrderdetails = view('Admin_panel/parcelOrderdetails')
                            ->with('fetchData', $fetchData)
                            ->with('m_info', $m_info);
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $parcelOrderdetails)
            ->with('footer', $footer);
    }
    public function acceptparcelOrder($id)
    {
        $accept = DB::table('parcel_delivery')->where('id',$id)->update(['status'=>2,]);

        if ($accept){
            $notification = array(
                'message' => 'Order Accepted Successfully',
                'alert-type' => 'success'
            );
            return Redirect('parcelOrder')->with($notification);
        }
        else
        {
            $notification = array(
                'message' => 'Something wrong',
                'alert-type' => 'error'
            );
            return Redirect('parcelOrder')->with($notification);
        }
    }
}
