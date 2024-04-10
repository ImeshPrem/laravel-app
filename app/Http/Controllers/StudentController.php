<?php

namespace App\Http\Controllers;

use App\Facades\StudentFacade; // Use the StudentFacade
use Inertia\InertiaController;

class StudentController extends InertiaController
{
    public function index()
    {
        $students = StudentFacade::all(); // Get all students using facade
        return Inertia::render('Students/Index', compact('students'));
    }

    // ... other CRUD methods (create, store, edit, update, destroy)
}
