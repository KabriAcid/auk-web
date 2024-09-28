<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Department;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    // List all staff records for the admin panel
    public function index()
    {
        $staff = Staff::with('department')->paginate(10);
        return view('admin.staff.index', compact('staff'));
    }

    // Show form to create new staff
    public function create()
    {
        $departments = Department::all();
        return view('admin.staff.create', compact('departments'));
    }

    // Store new staff in the database
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:staff,email',
            'phone' => 'nullable|string|max:15',
            'rank' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,department_id',
            'status' => 'nullable|string|in:active,inactive', 
            'gender' => 'required|in:male,female,other',
            'biography' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5120', 
        ]);

        // Set default status to 'active' if not provided
        $data = $request->all();
        $data['status'] = $data['status'] ?? 'active';

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/staff'); 
            $data['image'] = str_replace('public/', 'storage/', $imagePath); 
        }

        // Log the status being created
        \Log::info('Creating staff with status: ' . $data['status']);

        // Create a new staff record
        Staff::create($data);

        return redirect()->route('admin.staff.index')->with('success', 'Staff added successfully.');
    }

    // Show form to edit staff
    public function edit($id)
    {
        $staff = Staff::where('staff_id', $id)->firstOrFail();
        $departments = Department::all();
        return view('admin.staff.edit', compact('staff', 'departments'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:staff,email,' . $id . ',staff_id',
            'phone' => 'nullable|string|max:15',
            'rank' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,department_id',
            'status' => 'required|string|in:active,inactive', 
            'gender' => 'required|in:male,female,other',
            'biography' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5120', 
        ]);
    
        // Fetch the staff record by staff_id
        $staff = Staff::where('staff_id', $id)->firstOrFail();
    
        // Exclude the image initially
        $data = $request->except('image');
    
        // Check if an image was uploaded, then merge it into $data
        if ($request->hasFile('image')) {
            // Delete the old image if necessary
            if ($staff->image) {
                \Storage::delete(str_replace('storage/', 'public/', $staff->image)); 
            }
    
            // Store new image and merge into $data
            $imagePath = $request->file('image')->store('public/staff');
            $data['image'] = str_replace('public/', 'storage/', $imagePath);
        }
    
        // Now update the staff with the merged data
        $staff->update($data);
    
        return redirect()->route('admin.staff.index')->with('success', 'Staff updated successfully.');
    }
    

    // Delete a staff record
    public function destroy($id)
    {
        $staff = Staff::where('staff_id', $id)->firstOrFail();

        // Delete the staff's image if it exists
        if ($staff->image) {
            \Storage::delete(str_replace('storage/', 'public/', $staff->image)); 
        }

        $staff->delete();

        return redirect()->route('admin.staff.index')->with('success', 'Staff deleted successfully.');
    }

    // List all staff records for public view
    public function staffList()
    {
        $staff = Staff::with('department')->get();
        return view('staff.index', compact('staff'));
    }
}
