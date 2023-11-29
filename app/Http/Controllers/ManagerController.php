<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        return view('manager.dashboard-manager');
    }
    public function dataClients()
    {
        return view('manager.data-clients');
    }
    public function dataCashiers()
    {
        return view('manager.data-cashiers');
    }
    public function reports()
    {
        return view('manager.reports');
    }
}
