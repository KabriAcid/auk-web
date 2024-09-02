@extends('layouts.app')

@section('content')
    <h1>Departments</h1>
    <a href="{{ route('departments-add-form') }}" class="btn btn-primary">Add Department</a>
    <ul>
        @foreach ($departments as $department)
            <li>{{ $department->department_name }}</li>
        @endforeach
    </ul>
@endsection
