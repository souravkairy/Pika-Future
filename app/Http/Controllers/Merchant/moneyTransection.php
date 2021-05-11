<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class moneyTransection extends Controller
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
    public function sendMoneyForm()
    {
        $this->mAuthCheck();
        $header = view('Merchant_panel/header');
        $sidebar = view('Merchant_panel/sidebar');
        $sendMoneyForm = view('Merchant_panel/sendMoneyForm');
        $footer = view('Merchant_panel/footer');
        return view('Merchant_panel/master')
                ->with('header', $header)
                ->with('sidebar', $sidebar)
                ->with('dashboard', $sendMoneyForm)
                ->with('footer', $footer);
    }
    public function sendMoney(request $request)
    {
        // print_r($request->all());
        // exit();


        $m_id = $request->m_id;

        $charge = $request->charge;
        $amount = $request->sending_amount;

        $sending_amount = $amount + $charge;

        $takaRate = $request->takaRate;
        $finaltaka = $takaRate * $amount;

        $data['m_id'] = $request->m_id;
        $data['c_first_name'] = $request->c_first_name;
        $data['c_last_name'] = $request->c_last_name;
        $data['c_document_name'] = $request->c_document_name;
        $data['c_document_number'] = $request->c_document_number;
        $data['c_email'] = $request->c_email;
        $data['c_mobile_number'] = $request->c_mobile_number;
        $data['sending_amount'] = $request->sending_amount;
        $data['finaltaka'] = $finaltaka;
        $data['charge'] = $charge;
        $data['r_first_name'] = $request->r_first_name;
        $data['r_last_name'] = $request->r_last_name;
        $data['r_phoneNumber'] = $request->r_phoneNumber;
        $data['payment_system'] = $request->payment_system;
        $data['order_date'] = date('y-m-d');
        $data['status'] = 1;



        $fetch_info = DB::table('merchant')->where('id',$m_id)->first();
        if ($fetch_info->remaining_balance >= $sending_amount) {
            $due = $fetch_info->remaining_balance - $sending_amount;
            if ($due) {
                DB::table('merchant')->where('id',$m_id)->update(['remaining_balance'=>$due]);
                DB::table('money_order')->insert($data);
                $notification = array(
                    'message' => 'Payment Done, Wait for the confirmations',
                    'alert-type' => 'success'
                );
                return Redirect('sendMoney')->with($notification);
            }
            else{
                $notification = array(
                    'message' => 'Something is getting Wrong',
                    'alert-type' => 'error'
                );
                return Redirect('sendMoney')->with($notification);
            }
        }
        else{
            $notification = array(
                'message' => 'You Do not Have sufficient balance, Please contact with vicenza service ',
                'alert-type' => 'error'
            );
            return Redirect('sendMoney')->with($notification);
        }

    }
    public function todaysTransections()
    {

        $this->mAuthCheck();
        $header = view('Merchant_panel/header');
        $sidebar = view('Merchant_panel/sidebar');
        $allMerchant = view('Merchant_panel/t_order');
        $footer = view('Merchant_panel/footer');
        return view('Merchant_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $allMerchant)
            ->with('footer', $footer);
    }
    public function allTransections()
    {
        $this->mAuthCheck();
        $header = view('Merchant_panel/header');
        $sidebar = view('Merchant_panel/sidebar');
        $allMerchant = view('Merchant_panel/all_order');
        $footer = view('Merchant_panel/footer');
        return view('Merchant_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $allMerchant)
            ->with('footer', $footer);
    }
    public function transectionDetails($id)
    {

        $this->mAuthCheck();
        // $id = Session::get('id');
        $fetchData = DB::table('money_order')->where('id',$id)->first();

        $header = view('Merchant_panel/header');
        $sidebar = view('Merchant_panel/sidebar');
        $transectionDetails = view('Merchant_panel/transectionDetails')
                            ->with('fetchData', $fetchData);
        $footer = view('Merchant_panel/footer');
        return view('Merchant_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $transectionDetails)
            ->with('footer', $footer);
    }
    public function calculation(request $request)
    {
        $amm = $request->taka;
        $takaRate = $request->takaRate;

        $final = $amm / $takaRate;

        Session::put('amm',$amm);
        Session::put('final',$final);

        return Redirect('sendMoney');

    }
}
