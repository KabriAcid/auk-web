<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\Program;
use App\Models\Department;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        $departments = Department::all(); // Fetch all departments
        return view('admin.programs.create', compact('departments'));
    }

    public function store(Request $request)
    {
        // Validate the request to ensure valid data
        $request->validate([
            'program_name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,department_id',
            'program_description' => 'nullable|string',  // Validation for program description
        ]);

        // Create a new program with the validated data
        Program::create($request->all());

        // Redirect with success message
        return redirect()->route('admin.programs.index')->with('success', 'Program added successfully!');
    }

    public function edit($id)
    {
        $program = Program::findOrFail($id); // Find the program or fail
        $departments = Department::all();    // Fetch all departments
        return view('admin.programs.edit', compact('program', 'departments'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'program_name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,department_id',
            'program_description' => 'nullable|string',  // Validate description as well
        ]);

        // Find the program and update it with the validated data
        $program = Program::findOrFail($id);
        $program->update($request->all());

        // Redirect with success message
        return redirect()->route('admin.programs.index')->with('success', 'Program updated successfully!');
    }

    public function destroy($id)
    {
        $program = Program::findOrFail($id);
        $program->delete();

        // Redirect with success message
        return redirect()->route('admin.programs.index')->with('success', 'Program deleted successfully!');
    }

    public function showPrograms()
    {
        $programs = Program::all(); // Fetch all programs
        $college = College::first(); // Fetch the college data (assuming you have only one college)
        
        return view('home', compact('programs', 'college'));
    }

}
