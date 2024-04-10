<?php

namespace App\Http\Controllers;

use App\Facades\StudentFacade; // Use the StudentFacade
use Inertia\InertiaController;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Services\StudentService;
use Inertia\Inertia;

class StudentController extends InertiaController
{
    public function index()
    {
        $students = StudentFacade::all(); // Get all students using facade
        return Inertia::render('Students/Index', compact('students'));
    }
    public function create()
{
    return Inertia::render('Students/Create');
}
public function store(StoreStudentRequest $request) // Use validation request
{
    $validated = $request->validated();
    $this->studentService->create($validated);

    return inertia('Students/Index'); // Redirect to student list view
}
    StudentFacade::create($validated);

    return inertia('Students/Index');
}
public function edit(Student $student)
{
    return Inertia::render('Students/Edit', compact('student'));
}
public function update(UpdateStudentRequest $request, Student $student) // Use validation request
{
    $validated = $request->validated();
    $this->studentService->update($student, $validated);

    return inertia('Students/Index'); // Redirect to student list view
}

    StudentFacade::update($student, $validated);

    return inertia('Students/Index'); // Redirect to student list view
}
public function destroy(Student $student)
{
    StudentFacade::delete($student->id);

    return redirect()->route('students.index');
}

    // ... other CRUD methods (create, store, edit, update, destroy)
}
