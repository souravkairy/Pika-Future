<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class backEnd extends Controller
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
        $dashboard = view('Admin_panel/dashboard');
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $dashboard)
            ->with('footer', $footer);

    }

    public function merchant_request()
    {

        $header = view('Admin_panel/header');
        // $sidebar = view('Admin_panel/sidebar');
        $dashboard = view('Admin_panel/merchant_request');
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            // ->with('sidebar', $sidebar)
            ->with('dashboard', $dashboard)
            ->with('footer', $footer);

    }
    public function add_admin()
    {
        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $add_admin = view('Admin_panel/add_admin');
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $add_admin)
            ->with('footer', $footer);
    }
    public function save_admin_data(request $request)
    {


        $this->AuthCheck();
        $data['user_name'] = $request->name;
        $data['user_email'] = $request->email;
        $data['user_password'] = md5($request->pass);
        $data['status'] = 1;
        $data['mo'] = $request->mo;
        $data['po'] = $request->po;
        $data['ato'] = $request->ato;
        $data['anm'] = $request->anm;
        $data['am'] = $request->am;
        $data['aa'] = $request->aa;
        $data['crs'] = $request->crs;

        $insert = DB::table('admin_user')->insert($data);

        if ($insert) {
            $notification = array(
                'message' => 'Admin Added Successfully',
                'alert-type' => 'success'
            );
            return Redirect('Add-Admin')->with($notification);
        }
        else{
            $notification = array(
                'message' => 'Something is wrong',
                'alert-type' => 'error'
            );
            return Redirect('Add-Admin')->with($notification);
        }
    }
    public function deleteadmin($id)
    {
        $deletedata = DB::table('admin_user')->where('id',$id)->delete();
        if ($deletedata) {
            $notification = array(
                'message' => 'Admin Deleted Successfully',
                'alert-type' => 'success'
            );
            return Redirect('Add-Admin')->with($notification);
        }
        else
        {
            $notification = array(
                'message' => 'Something is wrong',
                'alert-type' => 'error'
            );
            return Redirect('Add-Admin')->with($notification);
        }
    }
    public function rateSetting()
    {
        $this->AuthCheck();
        $header = view('Admin_panel/header');
        $sidebar = view('Admin_panel/sidebar');
        $rateSetting = view('Admin_panel/rateSetting');
        $footer = view('Admin_panel/footer');
        return view('Admin_panel/master')
            ->with('header', $header)
            ->with('sidebar', $sidebar)
            ->with('dashboard', $rateSetting)
            ->with('footer', $footer);
    }
    public function euroTotaka(request $request)
    {
        $this->AuthCheck();
        $id = $request->id;
        $data['euroTotaka'] = $request->euroTotaka;

        $update = DB::table('euro_rate')->where('id',$id)->update($data);

        if ($update) {
            $notification = array(
                'message' => 'Rate Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect('rateSetting')->with($notification);
        }
        else
        {
            $notification = array(
                'message' => 'Something is wrong',
                'alert-type' => 'error'
            );
            return Redirect('rateSetting')->with($notification);
        }
    }

}
