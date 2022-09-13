<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Theme;

class BackendController extends Controller
{

 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }  
    public function theme()
    {
    	$theme = Theme::find(1);

    	// return $theme;
    	return view('Backend.Theme.index', compact('theme'));
    }

    public function update(Request $request)
    {
    	// validation 

    	Theme::where('id', $request->id)->update([
    		"primary_color" => $request->primary_color,
    		"secondery_color" => $request->secondery_color,
    		"bg_color" => $request->bg_color,
    		"text_color" => $request->text_color
    	]);

    	return back()->with('success', 'Save Successfully');


    }

 
}
