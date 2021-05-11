<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class airTicket extends Controller
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
    public function airTicketForm()
    {
        $this->mAuthCheck();
        $header = view('Merchant_panel/header');
        $sidebar = view('Merchant_panel/sidebar');
        $airTicketForm = view('Merchant_panel/airTicketForm');
        $footer = view('Merchant_panel/footer');
        return view('Merchant_panel/master')
                ->with('header', $header)
                ->with('sidebar', $sidebar)
                ->with('dashboard', $airTicketForm)
                ->with('footer', $footer);
    }
    public function airTicketData(request $request)
    {
        $data['m_id']=$request->m_id;
        $data['d_from']=$request->d_from;
        $data['d_to']=$request->d_to;
        $data['no_of_adult']=$request->no_of_adult;
        $data['no_of_child']=$request->no_of_child;
        $data['no_of_infant']=$request->no_of_infant;
        $data['seat_type']=$request->seat_type;
        $data['departing_date']=$request->departing_date;
        $data['returning_date']=$request->returning_date;
        $data['name']=$request->name;
        $data['m_number']=$request->m_number;
        $data['email']=$request->email;
        $data['trip_type']=$request->trip_type;
        $data['order_date'] = date('y-m-d');
        $data['status']=1;

        $insertData = DB::table('airticket')->insert($data);

        if ($insertData) {
            $notification = array(
                'message' => 'Data Inserted Successfully',
                'alert-type' => 'success'
            );
            return Redirect('airTicketForm')->with($notification);
         }
         else
         {
            $notification = array(
                'message' => 'Something id wrong, Please Try Again!!!',
                'alert-type' => 'error'
            );
            return Redirect('airTicketForm')->with($notification);
         }
    }
    public function tairTicket()
    {
        $this->mAuthCheck();
        $header = view('Merchant_panel/header');
        $sidebar = view('Merchant_panel/sidebar');
        $tairTicket = view('Merchant_panel/tairTicket');
        $footer = view('Merchant_panel/footer');
        return view('Merchant_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $tairTicket)
            ->with('footer', $footer);
    }
    public function ticketDetails($id)
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

    public function aairTicket()
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
