<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class DashboardController extends Controller
{
    public function index()
    {
        $travels = Travel::all(); 
        return view('dash', ['travels' => $travels]); 
    }
    public function reizenIndex()
    {
        $travels = Travel::all(); 
        return view('reizen', ['travels' => $travels]); 
    }
}
