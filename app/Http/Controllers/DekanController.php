<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DekanController extends Controller
{
    public function index()
    {
        // Ambil data user dengan role 'Dekan'
        $user = User::where('role', 'Dekan')->first();

        return view('Dekan.Dashboard', compact('user'));
    }
}

