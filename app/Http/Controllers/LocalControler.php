<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalControler extends Controller
{
    public function setlocale($lang){
        if(in_array($lang, ['en', 'ps', 'fa'])){
            App::setLocale($lang);
            Session::put('locale', $lang);
        }

        return back();
    }
}
