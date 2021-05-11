<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class Merchant extends Controller
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
    public function index()
    {
        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $addMerchantForm = view('Admin_panel/addMerchantForm');
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $addMerchantForm)
            ->with('footer', $footer);
    }
    public function allMerchant()
    {
        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $allMerchant = view('Admin_panel/allMerchant');
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $allMerchant)
            ->with('footer', $footer);
    }
    public function addMerchant(request $request)
    {

        $data['store_name'] = $request->store_name;
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['p_mb_number'] = $request->p_mb_number;
        $data['b_mb_number'] = $request->b_mb_number;
        $data['d_of_birth'] = $request->d_of_birth;
        $data['s_l_number'] = $request->s_l_number;
        $data['email'] = $request->email;
        $data['pec_mail'] = $request->pec_mail;
        $data['store_address'] = $request->store_address;
        $data['city'] = $request->city;
        $data['p_code'] = $request->p_code;
        $data['country'] = $request->country;
        $data['i_card_number'] = $request->i_card_number;
        $data['m_username'] = $request->m_username;
        $data['m_password'] = md5($request->m_password);
        $data['reff_name'] = $request->reff_name;
        $data['charge'] = $request->t_charge;
        $data['issue_date'] = $request->issue_date;
        $data['remaining_balance'] = 0;
        $data['total_balance'] = 0;
        $data['status'] = 1;

        $insert_data = DB::table('merchant')->insert($data);

        if ($insert_data) {
            $notification = array(
                'message' => 'Data Added Successfully',
                'alert-type' => 'success'
            );
            return Redirect('Add-Merchant')->with($notification);
        }
    }
    public function dataDetails($id)
    {
        $fetchData = DB::table('merchant')->where('id',$id)->first();
        $r_details = DB::table('recharge_statement')->where('m_id',$id)->get();

        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $dataDetails = view('Admin_panel/dataDetails')
                            ->with('fetchData', $fetchData)
                            ->with('r_details', $r_details);
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $dataDetails)
            ->with('footer', $footer);
    }
    public function activeMerchant($id)
    {
        $active = DB::table('merchant')->where('id',$id)->update(['status'=>1,]);

        if ($active) {
            $notification = array(
                'message' => 'Merchant Account Activated Successfully',
                'alert-type' => 'success'
            );
            return Redirect('All-Merchant')->with($notification);
        }
        else
        {
            $notification = array(
                'message' => 'Something is Wrong',
                'alert-type' => 'error'
            );
            return Redirect('All-Merchant')->with($notification);
        }
    }
    public function deactiveMerchant($id)
    {
        $deactive = DB::table('merchant')->where('id',$id)->update(['status'=>0]);

        if ($deactive) {
            $notification = array(
                'message' => 'Merchant Account De-Activated Successfully',
                'alert-type' => 'success'
            );
            return Redirect('All-Merchant')->with($notification);
        }
        else
        {
            $notification = array(
                'message' => 'Something is Wrong',
                'alert-type' => 'error'
            );
            return Redirect('All-Merchant')->with($notification);
        }
    }
    public function editMerchantInfo($id)
    {
        $readData = DB::table('merchant')->where('id',$id)->first();
        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $editMerchantForm = view('Admin_panel/editMerchantForm')
                                ->with('readData',$readData);
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $editMerchantForm)
            ->with('footer', $footer);

    }
    public function updateMerchantdata(request $request)
    {
        $this->AuthCheck();
        $id = $request->id;
        $data['store_name'] = $request->store_name;
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['p_mb_number'] = $request->p_mb_number;
        $data['b_mb_number'] = $request->b_mb_number;
        $data['d_of_birth'] = $request->d_of_birth;
        $data['s_l_number'] = $request->s_l_number;
        $data['email'] = $request->email;
        $data['pec_mail'] = $request->pec_mail;
        $data['store_address'] = $request->store_address;
        $data['city'] = $request->city;
        $data['p_code'] = $request->p_code;
        $data['country'] = $request->country;
        $data['i_card_number'] = $request->i_card_number;
        $data['m_username'] = $request->m_username;
        $data['m_password'] = md5($request->m_password);
        $data['reff_name'] = $request->reff_name;
        $data['charge'] = $request->t_charge;
        $data['issue_date'] = $request->issue_date;
        $data['remaining_balance'] = $request->remaining_balance;
        $data['total_balance'] = $request->total_balance;
        $data['status'] = $request->status;

        $insert_data = DB::table('merchant')->where('id',$id)->update($data);

        if ($insert_data) {
            $notification = array(
                'message' => 'Data Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect('All-Merchant')->with($notification);
        }


    }






    public function deleteMerchant($id)
    {
        $active = DB::table('merchant')->where('id',$id)->delete();
        if ($active) {
            $notification = array(
                'message' => 'Merchant Account De-Activated Successfully',
                'alert-type' => 'success'
            );
            return Redirect('All-Merchant')->with($notification);
        }
        else
        {
            $notification = array(
                'message' => 'Something is Wrong',
                'alert-type' => 'error'
            );
            return Redirect('All-Merchant')->with($notification);
        }
    }


    public function rechargeMerchant(request $request)
    {
        $this->AuthCheck();
        $n_r_amount = $request->n_r_amount;
        $m_id = $request->id;
        $fetchData = DB::table('merchant')->where('id',$m_id)->first();

        $r_amount =  $fetchData->remaining_balance +  $n_r_amount;
        $t_amount =  $fetchData->total_balance +  $n_r_amount;

        $data['recharge_amount'] =  $n_r_amount;
        $data['m_id'] =  $m_id;
        $data['status'] =  1;
        DB::table('recharge_statement')->insert($data);

        $r_recharge = DB::table('merchant')->where('id',$m_id)->update(['remaining_balance'=>$r_amount,'total_balance'=>$t_amount]);

        if ($r_recharge) {
            $notification = array(
                'message' => 'Recharge Successfully',
                'alert-type' => 'success'
            );
            return Redirect('All-Merchant')->with($notification);
        }
        else
        {
            $notification = array(
                'message' => 'Something is Wrong',
                'alert-type' => 'error'
            );
            return Redirect('All-Merchant')->with($notification);
        }

    }
    public function addMerchantRequest(request $request)
    {
        $data['store_name'] = $request->store_name;
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['p_mb_number'] = $request->p_mb_number;
        $data['b_mb_number'] = $request->b_mb_number;
        $data['d_of_birth'] = $request->d_of_birth;
        $data['s_l_number'] = $request->s_l_number;
        $data['email'] = $request->email;
        $data['pec_mail'] = $request->pec_mail;
        $data['store_address'] = $request->store_address;
        $data['city'] = $request->city;
        $data['p_code'] = $request->p_code;
        $data['country'] = $request->country;
        $data['i_card_number'] = $request->i_card_number;
        $data['m_username'] = $request->m_username;
        $data['m_password'] = md5($request->m_password);
        $data['reff_name'] = $request->reff_name;
        $data['charge'] = $request->charge;
        $data['issue_date'] = $request->issue_date;
        $data['remaining_balance'] = 0;
        $data['total_balance'] = 0;
        $data['status'] = 0;

        $insert_data = DB::table('merchant')->insert($data);

        if ($insert_data) {
            $notification = array(
                'message' => 'Data Added Successfully',
                'alert-type' => 'success'
            );
            return Redirect('merchant_request')->with($notification);
        }
    }

}
