<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function login(Request $r)
    {
    	
    	$login = [
            'name' => $r->user,
            'password' => $r->pass,
        ];
        # return Hash::make($r->pass);
        if (Auth::attempt($login)) {
        	return redirect('dashboard/user');
        }else{
        	return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        	echo "false";
        }
    }
}
