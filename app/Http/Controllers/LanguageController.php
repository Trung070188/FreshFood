<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function language(Request $request,$language){
    	//kiem tra luu session
    	if($language){
    		Session::put('language',$language);

    	}
    	return redirect()->back();
    }
}
