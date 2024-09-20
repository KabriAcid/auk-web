<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\College;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('admin.departments.index', compact('departments'));
    }

    public function create()
    {
        $colleges = College::all(); // Fetch all colleges

        return view('admin.departments.create', compact('colleges'));
    }

    public function store(Request $request)
{
    // Validate only the necessary fields
    $validated = $request->validate([
        'department_name' => 'required|string|max:255',
        'college_id' => 'required|exists:colleges,college_id',
    ]);

    // Create the department
    Department::create([
        'department_name' => $validated['department_name'],
        'college_id' => $validated['college_id'],
    ]);

    return redirect()->route('admin.departments.index')->with('success', 'Department added successfully.');
}

    public function edit($id)
    {
        // Fetch the department by ID
        $department = Department::findOrFail($id);

        // Fetch all colleges to populate the select dropdown
        $colleges = College::all();

        // Return the view and pass the department and colleges data
        return view('admin.departments.edit', compact('department', 'colleges'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'department_name' => 'required',
            'college_id' => 'required',
        ]);

        $department = Department::findOrFail($id);
        $department->update($request->all());

        return redirect()->route('admin.departments.index')->with('success', 'Department updated successfully.');
    }

    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();

        return redirect()->route('admin.departments.index')->with('success', 'Department deleted successfully.');
    }
}
