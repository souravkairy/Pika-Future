<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontEnd extends Controller
{
    public function index()
    {
        return view('Front_end/master');
    }
}
