@extends('layout.admin')

@section('content')
<h1>Add New Staff</h1>
<form action="{{ route('admin.staff.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" id="first_name" required>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" id="last_name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="phone_number">Phone Number:</label>
    <input type="text" name="phone_number" id="phone_number" required>

    <label for="job_title">Job Title:</label>
    <input type="text" name="job_title" id="job_title" required>

    <label for="department_id">Department ID:</label>
    <input type="number" name="department_id" id="department_id" required>

    <label for="rank">Rank:</label>
    <input type="text" name="rank" id="rank" required>

    <label for="responsibility">Responsibility:</label>
    <input type="text" name="responsibility" id="responsibility" required>

    <label for="biography">Biography:</label>
    <textarea name="biography" id="biography" rows="4"></textarea>

    <label for="image">Image:</label>
    <input type="file" name="image" id="image">

    <label for="status">Status:</label>
    <select name="status" id="status" required>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>

    <label for="gender">Gender:</label>
    <select name="gender" id="gender" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select>

    <button type="submit">Add Staff</button>
</form>
@endsection
