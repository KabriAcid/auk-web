@extends('layout.admin')

@section('content')
<h2>Colleges List</h2>
<a href="{{ route('admin.colleges.create') }}"  class="add-link">Add New College</a>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>College Name</th>
            <th>Dean Name</th>
            <th>Dean Image</th>
            <th>Dean's Welcome Message</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($colleges as $index => $college)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $college->college_name }}</td>
        <td>{{ $college->dean_name }}</td>
        <td>
            @if ($college->dean_image)
            <img src="{{ asset('storage/' . $college->dean_image) }}" alt="{{ $college->dean_name }}" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
            @else
                No Image
            @endif
        </td>
        <td>{{ $college->dean_welcome_message }}</td>
        <td class="table-actions">
            <a href="{{ route('admin.colleges.edit', $college->college_id) }}">Edit</a>
            <form action="{{ route('admin.colleges.destroy', $college->college_id) }}" method="POST" style="display:inline;">
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
