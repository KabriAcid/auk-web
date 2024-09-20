@extends('layout.admin')

@section('content')
<h1>Edit College</h1>
<form action="{{ route('admin.colleges.update', $college->college_id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="college_name">College Name:</label>
    <input type="text" name="college_name" id="college_name" value="{{ $college->college_name }}" required>

    <label for="dean_name">Dean Name:</label>
    <input type="text" name="dean_name" id="dean_name" value="{{ $college->dean_name }}">

    <label for="dean_welcome_message">Dean's Welcome Message:</label>
    <textarea name="dean_welcome_message" id="dean_welcome_message">{{ $college->dean_welcome_message }}</textarea>

    <label for="dean_image">Dean Image:</label>
    <input type="file" name="dean_image" id="dean_image">
    @if ($college->dean_image)
        <img src="{{ asset('storage/' . $college->dean_image) }}" alt="Dean Image" width="100">
    @endif

    <button type="submit">Update College</button>
</form>

@endsection
