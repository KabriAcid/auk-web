<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;




class StaffController extends Controller
{
        public function listStaff()
    {
        // Assuming you are passing the staff data to the view
        $staff = Staff::all();
        return view('staff.list', compact('staff'));
    }

    // List all staff
    public function index()
    {
        $staff = Staff::all(); // Fetch all staff records
        return view('admin.staff.index', compact('staff')); // Pass staff data to the view
    }

    // Show form to create new staff
    public function create()
    {
        return view('admin.staff.create'); // Return the view to add new staff
    }

    // Store new staff in database
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:staff',
            'phone_number' => 'required',
            'job_title' => 'required',
            'department_id' => 'required|exists:departments,department_id',
            'status' => 'required',
            'address' => 'nullable',
            'gender' => 'required',
        ]);

        // Create a new staff record
        Staff::create($request->all());

        return redirect()->route('admin.staff.index')->with('success', 'Staff added successfully.');
    }

        // Show form to edit staff
        public function edit($id)
        {
            $staff = Staff::where('staff_id', $id)->firstOrFail(); // Use staff_id
            return view('admin.staff.edit', compact('staff'));
        }
        

        // Update staff in the database
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:staff,email,'.$id.',staff_id',
            'phone_number' => 'required',
            'job_title' => 'required',
            'department_id' => 'required|exists:departments,department_id',
            'status' => 'required',
            'address' => 'nullable',
            'gender' => 'required',
        ]);

        $staff = Staff::where('staff_id', $id)->firstOrFail(); // Use staff_id
        $staff->update($request->all()); // Update the staff record

        return redirect()->route('admin.staff.index')->with('success', 'Staff updated successfully.');
    }


    // Delete staff
    public function destroy($id)
    {
        $staff = Staff::where('staff_id', $id)->firstOrFail(); // Use staff_id
        $staff->delete(); // Delete the staff record

        return redirect()->route('admin.staff.index')->with('success', 'Staff deleted successfully.');
    }

    public function staffList()
{
    $staff = Staff::all(); // Fetch all staff records
    return view('staff.index', compact('staff')); // Return the view with staff data
}
}
