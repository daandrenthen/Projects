<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel; // Importeer het Travel model

class DashboardController extends Controller
{
    public function index()
    {
        $travels = Travel::all(); // Haal alle reizen op uit de database
        return view('dash', ['travels' => $travels]); // Geef de reizen door aan de view
    }
    public function reizenIndex()
    {
        $travels = Travel::all(); // Haal alle reizen op uit de database
        return view('reizen', ['travels' => $travels]); // Geef de reizen door aan de view
    }
}
