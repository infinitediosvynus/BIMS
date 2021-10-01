<?php

namespace App\Http\Controllers\Official;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    public function index(){
        return view('official.official');
}
}
