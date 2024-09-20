@extends('layout.admin')

@section('content')
<h1>Edit Staff</h1>
<form action="{{ route('admin.staff.update', $staff->staff_id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $staff->first_name) }}" required>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $staff->last_name) }}" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ old('email', $staff->email) }}" required>

    <label for="phone_number">Phone Number:</label>
    <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $staff->phone_number) }}">

    <label for="job_title">Job Title:</label>
    <input type="text" name="job_title" id="job_title" value="{{ old('job_title', $staff->job_title) }}" required>

    <label for="department_id">Department ID:</label>
    <input type="text" name="department_id" id="department_id" value="{{ old('department_id', $staff->department_id) }}" required>

    <label for="rank">Rank:</label>
    <input type="text" name="rank" id="rank" value="{{ old('rank', $staff->rank) }}" required>

    <label for="responsibility">Responsibility:</label>
    <input type="text" name="responsibility" id="responsibility" value="{{ old('responsibility', $staff->responsibility) }}" required>

    <label for="biography">Biography:</label>
    <textarea name="biography" id="biography" rows="4">{{ old('biography', $staff->biography) }}</textarea>

    <label for="image">Image:</label>
    <input type="file" name="image" id="image">

    <label for="status">Status:</label>
    <input type="text" name="status" id="status" value="{{ old('status', $staff->status) }}">

    <label for="gender">Gender:</label>
    <input type="text" name="gender" id="gender" value="{{ old('gender', $staff->gender) }}" required>

    <button type="submit">Update Staff</button>
</form>
@endsection
