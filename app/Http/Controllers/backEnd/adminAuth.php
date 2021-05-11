<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;


class adminAuth extends Controller
{
    public function index()
    {
        $header = view('Admin_auth/header');
        $footer = view('Admin_auth/footer');
        return view('Admin_auth/adminLoginForm')
            ->with('header', $header)
            ->with('footer', $footer);
    }
    public function forgotPass()
    {
        $header = view('Admin_auth/header');
        $footer = view('Admin_auth/footer');
        return view('Admin_auth/forgotPassword')
            ->with('header', $header)
            ->with('footer', $footer);

    }
    public function check_admin(request $request)
    {
        $this->validate($request,[
            'user_name' =>'required',
            'password' =>'required'
       ]);

       $user_name = $request->user_name;
       $password = $request->password;

       $db_ck = DB::table('admin_user')
                    ->where('user_name',$user_name)
                    ->where('user_password',md5($password))
                    ->where('status',1)
                    ->first();
        if ($db_ck) {

            Session::put('id',$db_ck->id);
            Session::put('user_name',$db_ck->user_name);
            Session::put('user_password',$db_ck->user_password);

            $admin_mail = $db_ck->user_email;

            $notification = array(
                'message' => 'Write 6 Digit Otp which one sent in your regestered email',
                'alert-type' => 'success'
            );
            $twofauth = mt_rand(100000, 999999);
            Session::put('twofauth',$twofauth);
            Mail::to($admin_mail)->send(new MyTestMail($twofauth));
            return Redirect('ckadmintwof')->with($notification);
         }
         else
         {
            $notification = array(
                'message' => 'Wrong Username/Password, Please Try Again!!!',
                'alert-type' => 'error'
            );
            return Redirect('super_admin')->with($notification);
         }

    }
    public function ckadmintwof()
    {
        $header = view('Admin_auth/header');
        $footer = view('Admin_auth/footer');
        return view('Admin_auth/ckadmintwof')
            ->with('header', $header)
            ->with('footer', $footer);
    }
    public function ckatwofauth(request $request)
    {
        $twofauth = $request->twofauth;
        $cktwofauth = $request->cktwofauth;
        $user_name = $request->user_name;
        $user_password = $request->user_password;
        $id = $request->id;

        // $db_ck = DB::table('merchant')
        //             ->where('m_username',$m_username)
        //             ->where('m_password',md5($m_password))
        //             ->where('status',1)
        //             ->first();
        if ($twofauth == $cktwofauth) {
                Session::put('id',$id);
                Session::put('user_name',$user_name);
                Session::put('user_password',$user_password);
                $notification = array(
                    'message' => 'Welcome!! You are logged In',
                    'alert-type' => 'success'
                );
                return Redirect('dashboard')->with($notification);


        }
        else{
            $notification = array(
                'message' => 'Wrong OTP, Please Try Again!!!',
                'alert-type' => 'error'
            );
            return Redirect('ckadmintwof')->with($notification);
        }
    }
    public function log_out()
    {
        Session::put('user_name','');
    	Session::put('user_password','');
        $notification = array(
            'message' => 'log out successful',
            'alert-type' => 'info'
        );
        return Redirect::to('/super_admin')->with($notification);
    }

}
