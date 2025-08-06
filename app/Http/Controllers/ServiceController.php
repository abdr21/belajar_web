<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Service ',
        ];
        return view('service.index', $data);
            // You can add more data to pass to the view    
    //
}
}