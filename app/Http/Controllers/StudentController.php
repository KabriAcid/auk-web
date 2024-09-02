<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Method to show the list of students
    public function showStudentList()
    {
        $students = Student::all(); // Fetch all students from the database
        return view('students.list', compact('students'));
    }

    // Method to show the form to add a new student
    public function addStudentForm()
    {
        return view('students.add'); // Return the form view
    }

    // Method to save a new student
    public function saveStudent(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'level' => 'required|integer',
            'department_id' => 'required|exists:departments,department_id',
            'course_id' => 'required|exists:courses,course_id',
        ]);

        // Create a new student in the database
        Student::create($request->all());

        return redirect()->route('student-list')->with('success', 'Student added successfully!');
    }

    // Method to show the form to edit an existing student
    public function editStudentForm($id)
    {
        $student = Student::findOrFail($id); // Fetch the student by ID
        return view('students.edit', compact('student'));
    }

    // Method to update an existing student
    public function updateStudent(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students,email,' . $id,
            'level' => 'required|integer',
            'department_id' => 'required|exists:departments,department_id',
            'course_id' => 'required|exists:courses,course_id',
        ]);

        // Update the student in the database
        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('student-list')->with('success', 'Student updated successfully!');
    }

    // Method to delete a student
    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id); // Fetch the student by ID
        $student->delete(); // Delete the student

        return redirect()->route('student-list')->with('success', 'Student deleted successfully!');
    }
}
