<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        if (Auth::id()){
             $role =Auth()->user()->role;
            if ($role == 'student'){
                return view('student.dashboard');
            }
            else if ($role == 'admin'){
                return view('admin.adminhome');
            }
            else if ($role == 'evaluator'){
                return view('evaluator.evaluator_dashboard');
            }
            else {
                redirect()->back();
            }
        }
    }

}
