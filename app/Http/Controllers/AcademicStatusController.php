<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicStatusController extends Controller
{
    public function index()
    {
        return view('academic_status');
    }
}

