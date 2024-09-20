<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CollegeController extends Controller
{
    // Display the college list
    public function index()
    {
        $colleges = College::all();
        return view('admin.colleges.index', compact('colleges'));
    }

    // Show form to create a new college
    public function create()
    {
        return view('admin.colleges.create');
    }

    // Store a new college
    public function store(Request $request)
    {
        $request->validate([
            'college_name' => 'required|string|max:255',
            'dean_name' => 'nullable|string|max:255',
            'dean_welcome_message' => 'nullable|string', // Updated to match the migration
            'dean_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);
        
        $data = $request->all();
        
        if ($request->hasFile('dean_image')) {
            $data['dean_image'] = $request->file('dean_image')->store('images', 'public');
        }
        
        College::create($data);
        

        return redirect()->route('admin.colleges.index')->with('success', 'College added successfully!');
    }

    // Show form to edit an existing college
    public function edit($id)
    {
        $college = College::findOrFail($id);
        return view('admin.colleges.edit', compact('college'));
    }

    // Update the college
    public function update(Request $request, $id)
{
    $request->validate([
        'college_name' => 'required|string|max:255',
        'dean_name' => 'nullable|string|max:255',
        'dean_welcome_message' => 'nullable|string', // Ensures this is validated
        'dean_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
    ]);

    $college = College::findOrFail($id);

    $data = $request->all();

    if ($request->hasFile('dean_image')) {
        if ($college->dean_image) {
            Storage::disk('public')->delete($college->dean_image);
        }
        $data['dean_image'] = $request->file('dean_image')->store('images', 'public');
    }

    $college->update($data);

    return redirect()->route('admin.colleges.index')->with('success', 'College updated successfully!');
}


    // Delete a college
    public function destroy($id)
    {
        $college = College::findOrFail($id);
        
        // Delete the dean image if exists
        if ($college->dean_image) {
            Storage::disk('public')->delete($college->dean_image);
        }

        $college->delete();
        return redirect()->route('admin.colleges.index')->with('success', 'College deleted successfully!');
    }
}
