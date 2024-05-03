<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Model\User;

class HomeController extends Controller
{
    public function index()
    {
        // Add your logic for the index method here
        // For example, you can return a view or perform some other actions
        if(Auth::id()){
            if(Auth::user()->usertype == '0'){
                
                return view('index');
            }
            else{

                return view('admin.home');
            }
        }
        else{
            return redirect()->back();
        }

    }
   
}

