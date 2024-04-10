@inertiaHead([
  // ... any head content
])

@inertia('Students/Index', [
  'students' => StudentFacade::all(),
])
