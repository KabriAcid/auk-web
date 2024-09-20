@extends('layout.admin')

@section('content')
<h1>Add New Course</h1>

<form action="{{ route('admin.courses.store') }}" method="POST">
    @csrf
    <div>
        <label for="course_code">Course Code:</label>
        <input type="text" id="course_code" name="course_code" required>
    </div>

    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
    </div>

    <div>
        <label for="unit">Units:</label>
        <input type="number" id="unit" name="unit" required>
    </div>

    <div>
        <label for="departments">Departments:</label>
        <select id="departments" name="department_ids[]" multiple>
            @foreach($departments as $department)
                <option value="{{ $department->department_id }}">{{ $department->department_name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Add Course</button>
</form>
@endsection
