@extends('layouts.app')

@section('content')
    <h1>Add Department</h1>
    <form action="{{ route('departments-save') }}" method="POST">
        @csrf
        <div class="form-group ">
            <label for="department_name">Department Name</label>
            <input type="text" name="department_name" id="department_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="college_id">College ID</label>
            <input type="number" name="college_id" id="college_id" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Add Department</button>
    </form>
@endsection
