<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{

    public function index(){

        return view('home.userpage');
    }
    public function redirect()
    {
        if (Auth::check()) {
            $usertype = Auth::user()->usertype;
        
            if ($usertype === '1') {
                return view('admin.home');
            } else {
                return view('home.userpage');
            }
        } /*else {
            return redirect('login');
        }
        */
    }
}
