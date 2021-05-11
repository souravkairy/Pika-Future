<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;



class merchantAuth extends Controller
{
    public function index()
    {
        $header = view('Admin_auth/header');
        $footer = view('Admin_auth/footer');
        return view('Merchant_auth/merchantLoginForm')
            ->with('header', $header)
            ->with('footer', $footer);
    }
    public function merchant_forgotPass()
    {
        $header = view('Admin_auth/header');
        $footer = view('Admin_auth/footer');
        return view('Admin_auth/forgotPassword')
            ->with('header', $header)
            ->with('footer', $footer);
    }


    public function check_merchant(request $request)
    {

        $this->validate($request,[
            'm_username' =>'required',
            'm_password' =>'required'
       ]);

       $m_username = $request->m_username;
       $m_password = $request->m_password;

       $db_ck = DB::table('merchant')
                    ->where('m_username',$m_username)
                    ->where('m_password',md5($m_password))
                    ->where('status',1)
                    ->first();
        if ($db_ck) {

            Session::put('id',$db_ck->id);
            Session::put('user_name',$db_ck->m_username);
            Session::put('user_password',$db_ck->m_password);

            $m_email = $db_ck->email;

            $notification = array(
                'message' => 'Write 6 Digit Otp which one sent in your regestered email',
                'alert-type' => 'success'
            );
            $twofauth = mt_rand(100000, 999999);
            Session::put('twofauth',$twofauth);


            Mail::to($m_email)->send(new MyTestMail($twofauth));

            // dd("Email is Sent.");
            return Redirect('twosv')->with($notification);
         }
         else
         {
            $notification = array(
                'message' => 'Wrong Username/Password, Please Try Again!!!',
                'alert-type' => 'error'
            );
            return Redirect('merchant')->with($notification);
         }

    }
    public function twosv()
    {
        $header = view('Admin_auth/header');
        $footer = view('Admin_auth/footer');
        return view('Merchant_auth/twosv')
            ->with('header', $header)
            ->with('footer', $footer);
    }
    public function cktwofauth(request $request)
    {
        $twofauth = $request->twofauth;
        $cktwofauth = $request->cktwofauth;
        $m_username = $request->m_username;
        $m_password = $request->m_password;
        $id = $request->id;

        // $db_ck = DB::table('merchant')
        //             ->where('m_username',$m_username)
        //             ->where('m_password',md5($m_password))
        //             ->where('status',1)
        //             ->first();
        if ($twofauth == $cktwofauth) {
                Session::put('id',$id);
                Session::put('user_name',$m_username);
                Session::put('user_password',$m_password);
                $notification = array(
                    'message' => 'Welcome!! You are logged In',
                    'alert-type' => 'success'
                );
                return Redirect('merchant_dashboard')->with($notification);


        }
        else{
            $notification = array(
                'message' => 'Wrong OTP, Please Try Again!!!',
                'alert-type' => 'error'
            );
            return Redirect('twosv')->with($notification);
        }


    }
    public function merchantLogout()
    {
        Session::put('user_name','');
    	Session::put('user_password','');
        $notification = array(
            'message' => 'log out successful',
            'alert-type' => 'info'
        );
        return Redirect::to('/merchant')->with($notification);
    }

    public function send_mail()
    {
        $details = 456456;
        Mail::to('souravkairy1997@gmail.com')->send(new MyTestMail($details));

        dd("Email is Sent.");

    }
}
