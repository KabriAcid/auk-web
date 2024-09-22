@extends('layout.admin')

@section('content')
<h1>Department List</h1>

<a href="{{ route('admin.departments.create') }}">Add New Department</a>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif


<table>
    <thead>
        <tr>
            <th>Department ID</th>
            <th>Department Name</th>
            <th>College</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($departments as $department)
    <tr>
        <td>{{ $department->department_id }}</td>
        <td>{{ $department->department_name }}</td>
        <td>{{ $department->college->college_name ?? 'N/A' }}</td> <!-- Assuming department belongs to college -->
        <td>
            <a href="{{ route('admin.departments.edit', $department->department_id) }}">Edit</a>
            <form action="{{ route('admin.departments.destroy', $department->department_id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this department?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
