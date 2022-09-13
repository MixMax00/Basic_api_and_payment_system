<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\ResetPasswordNotification;
use Hash;
use Carbon\Carbon;
use App\Models\UserPassReset;
use Notification;


class CustomerAuthenticateController extends Controller
{
    

    //Register METHOD
    public function register(Request $request)
    {
    	$this->validate($request, [
    		"name"     => "required",
    		"email"    => "required|email|unique:customers",
    		"password" => "required|string|min:8|confirmed"
    	]);


    	// Insert Customer Table User Data
    	User::create([
    		"name"     => $request->name,
    		"email"    => $request->email,
    		"password" => Hash::make($request->password),
        ]);


       // return response

    	return response()->json([
    		"status"   => 201,
    		"message"  => "User Registation Successfully!!" 
    	]);


    }

    //login method

    public function login(Request $request)
    {

    	$login_data = $request->validate([
    		"email"    => "required",
    		"password" => "required|string|min:8"
    	]);

    	if (!auth()->attempt($login_data)) {
    		
    		return response()->json([

    			"status"  => false,
    			"message" => "Invalid Credinatials"
    		]);
    	}

    	// create token

    	$token = auth()->user()->createToken("user_token")->accessToken;

    	return response()->json([
    		"status"  => 200,
    		"message" => "User Loggdin Successfully!!",
    		"access_token" => $token
    	]);
    }

    // Prifile Method

    public function profile($id)
    {
        $profile = User::find($id);
        return response()->json([
            "status"  => 200,
            "data" =>  $profile
        ]);

    }

    // Update Profile Method

    public function updateProfile(Request $request)
    {

    }
    
    // Rest Password Method

    public function resetPassword(Request $request)
    {
    	 // validation 
    	$login_data = $request->validate([
    		"email"    => "required",
    	]);


    	$user = User::where('email', $request->email)->firstOrFail();

    	$password_rest = UserPassReset::where('user_id',$user->id)->delete();

    	$reset_password = UserPassReset::create([
    		"user_id" => $user->id,
    		"token"   => rand(0, 99999),
    		"created_at" => Carbon::now(),
    	]);

    	Notification::send($user, new ResetPasswordNotification($reset_password));

    	return response()->json([
    		"status" => true,
    		"message" => "Password rest code send your email"
    	]);

    }

    //Check Reset Password Token

    public function passwordToken(Request $request)
    {
    	$reset_token = UserPassReset::where('token', $request->token)->first();
    
    	
    	return response()->json([
    		"status"  => true,
    		"user_id" =>$reset_token->user_id
    	]);
    }

    public function changePassword(Request $request){
    	 $users = User::findOrFail($request->user_id);
    	 $users->password = $request->password;
    	 $users->save();

    	 return response()->json([
    	 	"status" => true,
    	 	"message" => "Your Password Change Successfully!!"
    	 ]);


    }


    // Logout Method

    public function logout(Request $request)
    {

    }
}
