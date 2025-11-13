<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }
}