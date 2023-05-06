<?php

namespace App\Http\Controllers;

use App\Models\ClientTester;
use App\Models\Resort;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', ['resorts' => Resort::index(), 'count' => Resort::count(), 'clients' => ClientTester::index(), 'countclient' => ClientTester::count()]);
    }
}
