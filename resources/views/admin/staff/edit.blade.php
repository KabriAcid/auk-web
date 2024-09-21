@extends('layout.admin')

@section('content')
<h1>Edit Staff</h1>
<form action="{{ route('admin.staff.update', $staff->staff_id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $staff->first_name) }}" required>
    @error('first_name')
        <div class="error">{{ $message }}</div>
    @enderror

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $staff->last_name) }}" required>
    @error('last_name')
        <div class="error">{{ $message }}</div>
    @enderror

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ old('email', $staff->email) }}" required>
    @error('email')
        <div class="error">{{ $message }}</div>
    @enderror

    <label for="phone">Phone Number:</label>
    <input type="text" name="phone" id="phone" value="{{ old('phone', $staff->phone) }}">
    @error('phone')
        <div class="error">{{ $message }}</div>
    @enderror

    <!-- Department Dropdown -->
    <label for="department_id">Department:</label>
    <select name="department_id" id="department_id" required>
        <option value="">Select Department</option>
        @foreach($departments as $department)
            <option value="{{ $department->department_id }}" {{ old('department_id', $staff->department_id) == $department->department_id ? 'selected' : '' }}>
                {{ $department->department_name }}
            </option>
        @endforeach
    </select>
    @error('department_id')
        <div class="error">{{ $message }}</div>
    @enderror

    <label for="rank">Rank:</label>
    <input type="text" name="rank" id="rank" value="{{ old('rank', $staff->rank) }}" required>
    @error('rank')
        <div class="error">{{ $message }}</div>
    @enderror

    <label for="responsibility">Responsibility:</label>
    <input type="text" name="responsibility" id="responsibility" value="{{ old('responsibility', $staff->responsibility) }}" required>
    @error('responsibility')
        <div class="error">{{ $message }}</div>
    @enderror

    <label for="biography">Biography:</label>
    <textarea name="biography" id="biography" rows="4">{{ old('biography', $staff->biography) }}</textarea>
    @error('biography')
        <div class="error">{{ $message }}</div>
    @enderror

    <label for="image">Image:</label>
    <input type="file" name="image" id="image">
    @error('image')
        <div class="error">{{ $message }}</div>
    @enderror

    <label for="status">Status:</label>
    <select name="status" id="status" required>
        <option value="active" {{ old('status', $staff->status) == 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ old('status', $staff->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select>
    @error('status')
        <div class="error">{{ $message }}</div>
    @enderror


    <label for="gender">Gender:</label>
    <select name="gender" id="gender" required>
        <option value="male" {{ old('gender', $staff->gender ?? '') == 'male' ? 'selected' : '' }}>Male</option>
        <option value="female" {{ old('gender', $staff->gender ?? '') == 'female' ? 'selected' : '' }}>Female</option>
        <option value="other" {{ old('gender', $staff->gender ?? '') == 'other' ? 'selected' : '' }}>Other</option>
    </select>
    @error('gender')
        <div class="error">{{ $message }}</div>
    @enderror

    <button type="submit">Update Staff</button>
</form>
@endsection
