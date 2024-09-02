<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College;

class CollegeController extends Controller
{
    // Method to show the college list
    public function showCollegeList()
    {
        $colleges = College::all(); // Fetch all colleges from the database
        return view('colleges.list', compact('colleges'));
    }

    // Method to show the form to add a new college
    public function addCollegeForm()
    {
        return view('colleges.add'); // Return the form view
    }

    // Method to save the new college
    public function saveCollege(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'college_name' => 'required|string|max:255',
        ]);

        // Create a new college in the database
        College::create($request->all());

        return redirect()->route('colleges-list')->with('success', 'College added successfully!');
    }
}
