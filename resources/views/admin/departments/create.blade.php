@extends('layout.admin')

@section('content')
<h1>Add New Department</h1>

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

<form action="{{ route('admin.departments.store') }}" method="POST">
    @csrf
    
    <div>
        <label for="department_name">Department Name:</label>
        <input type="text" name="department_name" id="department_name" value="{{ old('department_name') }}" required>
    </div>

    <div>
        <label for="college_id">College:</label>
        <select name="college_id" id="college_id" required>
            <option value="" disabled selected>-- Select College --</option>
            @foreach($colleges as $college)
                <option value="{{ $college->college_id }}" {{ old('college_id') == $college->college_id ? 'selected' : '' }}>
                    {{ $college->college_name }}
                </option>
            @endforeach
        </select>
    </div>
    
    <div>
        <button type="submit">Add Department</button>
    </div>
</form>
@endsection
