<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    // Method to show the department list
    public function showDepartmentList()
    {
        $departments = Department::all(); // Fetch all departments from the database
        return view('departments.list', compact('departments'));
    }

    // Method to show the form to add a new department
    public function addDepartmentForm()
    {
        return view('departments.add'); // Return the form view
    }

    // Method to save the new department
    public function saveDepartment(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'department_name' => 'required|string|max:255',
            'college_id' => 'required|integer|exists:colleges,college_id',
        ]);

        // Create a new department in the database
        Department::create($request->all());

        return redirect()->route('departments-list')->with('success', 'Department added successfully!');
    }
}
