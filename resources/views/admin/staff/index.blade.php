@extends('layout.admin')

@section('content')
<h1>Staff List</h1>

<a href="{{ route('admin.staff.create') }}" class="btn btn-primary">Add New Staff</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Image</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Department</th>
            <th>Rank</th>
            <th>Status</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($staff as $index => $member)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $member->first_name }}</td>
                <td>{{ $member->last_name }}</td>
                <td>
                    @if($member->image)
                        <img src="{{ asset($member->image) }}" alt="{{ $member->first_name }}" width="80" height="80" style="object-fit: cover; border-radius: 50%;">
                    @else
                        No Image
                    @endif
                </td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->phone }}</td>
                <td>{{ $member->department->department_name ?? 'N/A' }}</td>
                <td>{{ $member->rank }}</td>
                <td>{{ $member->status == 'active' ? 'Active' : 'Inactive' }}</td>
                <td>{{ $member->gender }}</td>
                <td>
                    <a href="{{ route('admin.staff.edit', $member->staff_id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.staff.destroy', $member->staff_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this staff?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $staff->links() }} <!-- Pagination links -->
@endsection
