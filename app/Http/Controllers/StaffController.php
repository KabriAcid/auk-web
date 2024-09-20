<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    // Method to show the staff list
    public function showStaffList()
    {
        $staff = Staff::all(); // Fetch all staff from the database
        return view('staff.list', compact('staff'));
    }

    // Method to show the form to add a new staff member
    public function addStaffForm()
    {
        return view('staff.add'); // Return the form view
    }

    // Method to save the new staff member
    public function saveStaff(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:staff',
            'phone' => 'nullable|string|max:15',
            'rank' => 'required|string|max:255',
            'responsibility' => 'nullable|string|max:255',
            'biography' => 'nullable|string',
            'gender' => 'required|string|max:10', // Adding gender field
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Handling image uploads
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('staff_images', 'public');
            $staffData = $request->all();
            $staffData['image'] = $imagePath;
        } else {
            $staffData = $request->all();
        }

        // Create a new staff member in the database
        Staff::create($staffData);

        return redirect()->route('staff-list')->with('success', 'Staff member added successfully!');
    }
    
    public function create()
    {
        $departments = Department::all();
        return view('admin.staff.create', compact('departments'));
    }

    public function edit($id)
    {
        $staff = Staff::find($id);
        $departments = Department::all();
        return view('admin.staff.edit', compact('staff', 'departments'));
    }

}
