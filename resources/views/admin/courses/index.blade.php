@extends('layout.admin')

@section('content')
<h2>Courses List</h2>
<a href="{{ route('admin.courses.create') }}"  class="add-link">Add New Course</a>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Course Code</th>
            <th>Title</th>
            <th>Units</th>
            <th>Departments</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $index => $course)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $course->course_code }}</td>
            <td>{{ $course->title }}</td>
            <td>{{ $course->unit }}</td>
            <td>
                @foreach ($course->departments as $department)
                    {{ $department->department_name }}@if (!$loop->last), @endif
                @endforeach
            </td>
            <td class="table-actions">
                <a href="{{ route('admin.courses.edit', $course->id) }}">Edit</a>
                <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this course?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
