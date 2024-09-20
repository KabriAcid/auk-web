<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Program;
use App\Models\Department; // Ensure you import the Department model
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
        $request->validate([
            'program_name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,department_id',
        ]);

        Program::create($request->all());

        return redirect()->route('admin.programs.index')->with('success', 'Program added successfully!');
    }

    public function edit($id)
    {
        $program = Program::findOrFail($id); // Make sure you're passing the correct id
        $departments = Department::all();
        return view('admin.programs.edit', compact('program', 'departments'));
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'program_name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,department_id',
        ]);

        $program = Program::findOrFail($id);
        $program->update($request->all());

        return redirect()->route('admin.programs.index')->with('success', 'Program updated successfully!');
    }

    public function destroy($id)
    {
        $program = Program::findOrFail($id);
        $program->delete();

        return redirect()->route('admin.programs.index')->with('success', 'Program deleted successfully!');
    }
}


