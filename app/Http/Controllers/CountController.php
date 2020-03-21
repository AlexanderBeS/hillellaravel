<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CountController extends Controller
{
    public function increase()
    {
        $count = Session::get('counter');
        $count++;

        Session::put('counter', $count);

        //return $count;
        return \view('counter', compact('count'));
    }
}
