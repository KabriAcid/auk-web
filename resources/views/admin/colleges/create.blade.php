@extends('layout.admin')

@section('content')
<h1>Add New College</h1>
<form action="{{ route('admin.colleges.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="college_name">College Name:</label>
    <input type="text" name="college_name" id="college_name" required>

    <label for="dean_name">Dean Name:</label>
    <input type="text" name="dean_name" id="dean_name">

    <label for="dean_welcome_message">Dean's Welcome Message:</label>
    <textarea name="dean_welcome_message" id="dean_welcome_message"></textarea> 

    <label for="dean_image">Dean Image:</label>
    <input type="file" name="dean_image" id="dean_image">

    <button type="submit">Add College</button>
</form>
@endsection
