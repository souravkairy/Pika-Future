<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class percelDelivery extends Controller
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
    public function percelDeliveryForm()
    {
        $this->mAuthCheck();
        $header = view('Merchant_panel/header');
        $sidebar = view('Merchant_panel/sidebar');
        $percelDeliveryForm = view('Merchant_panel/percelDeliveryForm');
        $footer = view('Merchant_panel/footer');
        return view('Merchant_panel/master')
                ->with('header', $header)
                ->with('sidebar', $sidebar)
                ->with('dashboard', $percelDeliveryForm)
                ->with('footer', $footer);
    }
    public function savePercelinfo(request $request)
    {
        $data['m_id']=$request->m_id;
        $data['s_name']=$request->s_name;
        $data['s_m_number']=$request->s_m_number;
        $data['s_email_address']=$request->s_email_address;
        $data['s_house_number']=$request->s_house_number;
        $data['s_post_code']=$request->s_post_code;
        $data['s_city']=$request->s_city;
        $data['s_country']=$request->s_country;
        $data['s_p_up_delivery']=$request->s_p_up_delivery;
        $data['s_p_up_time']=$request->s_p_up_time;
        $data['r_name']=$request->r_name;
        $data['r_m_number']=$request->r_m_number;
        $data['r_email_address']=$request->r_email_address;
        $data['r_house_number']=$request->r_house_number;
        $data['r_post_code']=$request->r_post_code;
        $data['r_city']=$request->r_city;
        $data['r_country']=$request->r_country;
        $data['comment']=$request->comment;
        $data['order_date']=date('y-m-d');
        $data['status']=1;

        $insertData = DB::table('parcel_delivery')->insert($data);

        if ($insertData) {
            $notification = array(
                'message' => 'Data Inserted Successfully',
                'alert-type' => 'success'
            );
            return Redirect('percelDelivery')->with($notification);
         }
         else
         {
            $notification = array(
                'message' => 'Something id wrong, Please Try Again!!!',
                'alert-type' => 'error'
            );
            return Redirect('percelDelivery')->with($notification);
         }
    }
    public function tPercelDelivery()
    {
        $this->mAuthCheck();
        $header = view('Merchant_panel/header');
        $sidebar = view('Merchant_panel/sidebar');
        $tPercelDelivery = view('Merchant_panel/tPercelDelivery');
        $footer = view('Merchant_panel/footer');
        return view('Merchant_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $tPercelDelivery)
            ->with('footer', $footer);
    }
    public function pOrderDetails($id)
    {
        $this->mAuthCheck();
        // $id = Session::get('id');
        $fetchData = DB::table('parcel_delivery')->where('id',$id)->first();

        $header = view('Merchant_panel/header');
        $sidebar = view('Merchant_panel/sidebar');
        $pOrderDetails = view('Merchant_panel/pOrderDetails')
                            ->with('fetchData', $fetchData);
        $footer = view('Merchant_panel/footer');
        return view('Merchant_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $pOrderDetails)
            ->with('footer', $footer);

    }
    public function aPercelDelivery()
    {
        $this->mAuthCheck();
        $header = view('Merchant_panel/header');
        $sidebar = view('Merchant_panel/sidebar');
        $aPercelDelivery = view('Merchant_panel/aPercelDelivery');
        $footer = view('Merchant_panel/footer');
        return view('Merchant_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $aPercelDelivery)
            ->with('footer', $footer);
    }
}
