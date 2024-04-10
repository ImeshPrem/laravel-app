<?php

namespace App\Services;

use App\Student;

class StudentService
{
    public function create(array $data)
    {
        return Student::create($data);
    }

    public function update(Student $student, array $data)
    {
        $student->update($data);
        return $student;
    }

    public function delete($id)
    {
        Student::destroy($id);
    }
}
