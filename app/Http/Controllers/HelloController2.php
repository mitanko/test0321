<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController2 extends Controller
{
    public function
    index(Request $request, $room)
    {
        return view('top', compact(''));
    }
}
