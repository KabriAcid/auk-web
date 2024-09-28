@extends('layout.admin')

@section('content')
<h2>Programs List</h2>
<a href="{{ route('admin.programs.create') }}" class="add-link">Add New Program</a>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Program Name</th>
            <th>Department</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($programs as $index => $program)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $program->program_name }}</td>
            <td>{{ $program->department->department_name }}</td>
            <td>{{ Str::limit($program->program_description, 1000) }}</td> 
            <td class="table-actions">
                <a href="{{ route('admin.programs.edit', $program->program_id) }}">Edit</a>
                <form action="{{ route('admin.programs.destroy', $program->program_id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
