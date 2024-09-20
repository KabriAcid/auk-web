<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::with('departments')->get();
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('admin.courses.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_code' => 'required',
            'title' => 'required',
            'unit' => 'required|integer',
            'department_ids' => 'required|array',
        ]);

        $course = Course::create($request->only(['course_code', 'title', 'unit']));
        $course->departments()->attach($request->department_ids);

        return redirect()->route('admin.courses.index')->with('success', 'Course added successfully.');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $departments = Department::all();
        return view('admin.courses.edit', compact('course', 'departments'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_code' => 'required',
            'title' => 'required',
            'unit' => 'required|integer',
            'department_ids' => 'required|array',
        ]);

        $course = Course::findOrFail($id);
        $course->update($request->only(['course_code', 'title', 'unit']));
        $course->departments()->sync($request->department_ids);

        return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->departments()->detach();
        $course->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully.');
    }
}

