<?php

namespace App\Http\Controllers;

use Inertia\InertiaController;

class DashboardController extends InertiaController
{
    public function index()
    {
        // Logic for populating dashboard data (optional)
        return Inertia::render('Dashboard');
    }
}
