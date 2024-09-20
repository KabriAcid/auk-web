@extends('layout.admin')

@section('content')
<h1>Edit Department</h1>

<!-- Display validation errors -->
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Edit Department Form -->
<form action="{{ route('admin.departments.update', $department->department_id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <!-- Department Name Field -->
    <label for="department_name">Department Name:</label>
    <input type="text" name="department_name" id="department_name" value="{{ old('department_name', $department->department_name) }}" required>
    
    <!-- College Dropdown -->
    <label for="college_id">College:</label>
    <select name="college_id" id="college_id" required>
        @foreach($colleges as $college)
            <option value="{{ $college->college_id }}" {{ old('college_id', $department->college_id) == $college->college_id ? 'selected' : '' }}>
                {{ $college->college_name }}
            </option>
        @endforeach
    </select>
    
    <!-- Submit Button -->
    <button type="submit">Update Department</button>
</form>
@endsection
