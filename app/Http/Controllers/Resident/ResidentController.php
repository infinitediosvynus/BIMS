<?php

namespace App\Http\Controllers\Resident;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function index(){
        return view('resident.resident');
    }
}
