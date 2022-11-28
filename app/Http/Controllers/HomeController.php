<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show app dashboard
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function index(Request $request) {

        $user = Auth::user();
        $home = 'home';

        if($user->hasRole('admin')) {
            $home = 'admin.projects.index';
        }
        else {
            $home = 'user.projects.index';
        }

        return redirect()->route($home);
     }
}
