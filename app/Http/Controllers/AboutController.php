<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'About Us',
            // You can add more data to pass to the view
        ];
        return view('about.index', $data);
    }
    //
}
