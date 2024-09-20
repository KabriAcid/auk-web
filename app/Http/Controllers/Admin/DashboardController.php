<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Student;
use App\Models\Course;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch data for the dashboard
        $staffCount = Staff::count();
        $studentCount = 0;
        $courseCount = 0;
        $eventCount = 0;

        // Pass data to the view
        return view('admin.dashboard', compact('staffCount', 'studentCount', 'courseCount', 'eventCount'));
    }
}

