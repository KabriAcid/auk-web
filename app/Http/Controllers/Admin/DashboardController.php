<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Department;
use App\Models\Program;
use App\Models\Student;
use App\Models\Course;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch data for the dashboard
        $staffCount = Staff::count();
        $departmentCount = Department::count();
        $programCount = Program::count();
        $studentCount = 0; // Update this if needed
        $courseCount = 0; // Update this if needed
        $eventCount = Event::count();; 

        // Pass data to the view
        return view('admin.dashboard', compact('staffCount', 'departmentCount','programCount' ,'studentCount', 'courseCount', 'eventCount'));
    }
}


