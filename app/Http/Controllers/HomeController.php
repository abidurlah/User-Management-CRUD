<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;
        if($role == 'admin')
        {
            return view('admin.dashboard');
        }
        else
        {
            return view('dashboard');
        }

        // return $this->belongToMany(Role::class);
    }
}