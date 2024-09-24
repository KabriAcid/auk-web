@extends('layout.admin')

@section('content')
<h1>Edit Program</h1>

<form action="{{ route('admin.programs.update', $program->program_id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label for="program_name">Program Name:</label>
    <input type="text" name="program_name" id="program_name" value="{{ old('program_name', $program->program_name) }}" required>

    <label for="program_description">Program Description:</label>
    <textarea name="program_description" id="program_description" required>{{ old('program_description', $program->program_description) }}</textarea>

    <label for="department_id">Department:</label>
    <select name="department_id" id="department_id" required>
        @foreach($departments as $department)
            <option value="{{ $department->department_id }}" {{ $department->department_id == $program->department_id ? 'selected' : '' }}>
                {{ $department->department_name }}
            </option>
        @endforeach
    </select>
    
    <button type="submit">Update Program</button>
</form>
@endsection
