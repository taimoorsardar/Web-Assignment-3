<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if (Auth::id()){
            $usertype =Auth()->user()->usertype;
            if ($usertype == 'student'){
                return view('dashboard');
            }
            else if ($usertype == 'admin'){
                return view('admin.adminhome');
            }
            else {
                redirect()->back();
            }
        }
    }

}
