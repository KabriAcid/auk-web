@extends('layout.admin')

@section('content')
<h1>Edit Course</h1>

<form action="{{ route('admin.courses.update', $course->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="course_code">Course Code:</label>
        <input type="text" id="course_code" name="course_code" value="{{ $course->course_code }}" required>
    </div>

    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $course->title }}" required>
    </div>

    <div>
        <label for="unit">Units:</label>
        <input type="number" id="unit" name="unit" value="{{ $course->unit }}" required>
    </div>

    <div>
        <label for="departments">Departments:</label>
        <select id="departments" name="department_ids[]" multiple>
            @foreach($departments as $department)
                <option value="{{ $department->department_id }}"
                    @if ($course->departments->contains($department->department_id)) selected @endif>
                    {{ $department->department_name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">Update Course</button>
</form>
@endsection
