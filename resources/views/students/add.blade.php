<!-- resources/views/students/add.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Add New Student</h1>

    <!-- Error messages -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('student-save') }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>

        <label for="level">Level:</label>
        <input type="number" id="level" name="level" value="{{ old('level') }}" required>

        <label for="department_id">Department:</label>
        <select id="department_id" name="department_id" required>
            <!-- Populate this select with departments from the database -->
            @foreach($departments as $department)
                <option value="{{ $department->department_id }}">{{ $department->department_name }}</option>
            @endforeach
        </select>

        <label for="course_id">Course:</label>
        <select id="course_id" name="course_id" required>
            <!-- Populate this select with courses from the database -->
            @foreach($courses as $course)
                <option value="{{ $course->course_id }}">{{ $course->course_name }}</option>
            @endforeach
        </select>

        <button type="submit">Add Student</button>
    </form>

    <a href="{{ route('student-list') }}">Back to Student List</a>
</body>
</html>
