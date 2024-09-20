@extends('layout.admin')

@section('content')
<h1>Add New Program</h1>

<form action="{{ route('admin.programs.store') }}" method="POST">
    @csrf
    
    <label for="program_name">Program Name:</label>
    <input type="text" name="program_name" id="program_name" required>
    
    <label for="department_id">Department:</label>
    <select name="department_id" id="department_id" required>
        @foreach($departments as $department)
            <option value="{{ $department->department_id }}">{{ $department->department_name }}</option>
        @endforeach
    </select>
    
    <button type="submit">Add Program</button>
</form>
@endsection
