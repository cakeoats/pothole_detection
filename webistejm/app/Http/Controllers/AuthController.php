<?php

namespace App\Http\Controllers;

use App\Models\inspektor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\LogActivity;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            "username" => "required",
            "password" => "required",
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::guard('inspektor')->attempt($credentials)) {
            $user = Auth::guard('inspektor')->user();
            session(['user' => $user]);

            if ($user->status == 'requested') {
                Auth::guard('inspektor')->logout();
                return redirect()->route('login')->withErrors(['login' => 'Your account has not been approved yet.']);
            }

            
            if ($user->status == 'rejected') {
                Auth::guard('inspektor')->logout();
                return redirect()->route('login')->withErrors(['login' => 'Your account is rejected by admin contact admin for more information.']);
            }

            // Insert log activity
            LogActivity::create([
                'username' => $user->username,
                'activity_name' => 'User Login',
                'ip_address' => $request->ip(),
                'login_time' => now(),
            ]);

            return redirect()->intended(route('dashboard'));
        }

        //admin
        if (Auth::guard('admin')->attempt($credentials)) {
            $user = Auth::guard('admin')->user();
            session(['user' => $user]);
            
            return redirect()->intended(route('dashboard'));
        }   

        return redirect(route('login'))->with("error", "Invalid username or password");
    }

    public function logout()
    {
        Auth::guard('inspektor')->logout();
        session()->flush();
        return redirect()->route('login');
    }
    
    function register()
    {
        return view('auth/register');
    }

    function registerPost(Request $request){
        $request->validate([
            "username"=> "required|unique:inspektor",
            "fullname"=> "required",
            "division"=> "required",
            "email"=> "required|email|unique:inspektor",
            "password"=> "required|min:8",
        ]);

        $user = new inspektor();
        $user->username = $request->username;
        $user->fullname = $request->fullname;
        $user->division = $request->division;
        $user->status = "requested";
        $user->accepted_by = "NULL";
        $user->rejected_by = "NULL";
        $user->deleted_by = "NULL";
        
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            return redirect(route(name:"login"))
            ->with("success","user created successfully");
        }
        return redirect(route(name:"register"))
        ->with("error","Failed to create an account");

    }
    
}
