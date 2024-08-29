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
             'name' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:staff',
             'phone_number' => 'nullable|string|max:15',
         ]);
     
         // Create a new staff member in the database
         Staff::create($request->all());
     
         return redirect()->route('staff-list')->with('success', 'Staff member added successfully!');
     }
     
}
