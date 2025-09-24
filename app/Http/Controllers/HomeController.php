<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query'); // Dari search bar

        if($query){
            $services = Service::where('name','like',"%{$query}%")->get();
        } else {
            $services = Service::all();
        }

        return view('customer.home', compact('services'));
    }
}
