<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Home Page',
            'description' => 'Welcome to the home page of our Laravel application.'
        ];
        return view('home.index' ,$data);
    }
}
