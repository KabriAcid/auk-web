@extends('layout.admin')

@section('content')
    <h2>Events</h2>
    <a href="{{ route('admin.events.create') }}" class="add-link">Create New Event</a>
    
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Event Name</th>
                <th>Description</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Location</th>
                <th>Organizer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $index => $event)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $event->event_name }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->start_time }}</td>
                    <td>{{ $event->end_time }}</td>
                    <td>{{ $event->location }}</td>
                    <td>{{ $event->organizer }}</td>
                    <td class="table-actions">
                        <a href="{{ route('admin.events.edit', $event->id) }}">Edit</a>
                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
