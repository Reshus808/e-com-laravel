<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Schedule;
use Session;

class AdminController extends Controller
{
    //
    public function index(){

        return view('SchoolManagement.login');
    }

    public function login(Request $req){

        $admin = Admin::where('username',$req->username)
                        ->where('password', $req->password)
                        ->get()
                        ->toArray();
        if($admin){
            $req->session()->put('admin_session', $admin[0]['id']);
            return redirect('dashboard');
        }else{
            session::flash('coc', 'Email and password not match');
            return redirect('/')->withInput();

        }
        }
}       
