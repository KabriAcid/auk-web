<?php

namespace App\Http\Controllers;

use App\Models\Staff;

class PublicStaffController extends Controller
{
    // List all staff records for public view
    public function staffList()
    {
        // Fetch staff with selected fields (excluding department)
        $staff = Staff::select('staff_id', 'first_name', 'last_name', 'rank', 'biography', 'image')
            ->get();

        return view('staff.index', compact('staff')); // Return view with staff data
    }
}
