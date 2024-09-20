@extends('layout.admin')

@section('content')
<h1>Staff List</h1>
<a href="{{ route('admin.staff.create') }}">Add New Staff</a>

<table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Rank</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($staff as $member)
    <tr>
        <td>{{ $member->first_name }}</td>
        <td>{{ $member->last_name }}</td>
        <td>{{ $member->email }}</td>
        <td>{{ $member->phone }}</td> <!-- Assuming you have a 'phone' field in the Staff model -->
        <td>{{ $member->rank }}</td> <!-- Displaying the staff rank -->
        <td>{{ $member->department->department_name ?? 'N/A' }}</td> <!-- Assuming staff belongs to a department -->
        <td>
            <!-- Edit Staff Link -->
            <a href="{{ route('admin.staff.edit', $member->staff_id) }}">Edit</a>

            <!-- Delete Staff Form -->
            <form action="{{ route('admin.staff.destroy', $member->staff_id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this staff member?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
