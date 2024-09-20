@extends('layout.admin')

@section('content')
<h1>Programs List</h1>
<a href="{{ route('admin.programs.create') }}">Add New Program</a>
<table>
    <thead>
        <tr>
            <th>Program Name</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($programs as $program)
    <tr>
        <td>{{ $program->program_name }}</td>
        <td>{{ $program->department->department_name }}</td>
        <td>
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
