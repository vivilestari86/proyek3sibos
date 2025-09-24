<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function customer()
    {
        return view('customer.home');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }
}
