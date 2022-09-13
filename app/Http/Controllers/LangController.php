<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;
use Session;

class LangController extends Controller
{
    public function change(Request $request)
    {


    	App::setLocale($request->lang);
    	$request->session()->put('locale', $request->lang);


    	//return session()->get('locale');


    	return redirect()->back();
    }
}
