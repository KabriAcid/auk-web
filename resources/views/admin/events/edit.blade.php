@extends('layout.admin')

@section('content')
    <h1>Edit Event</h1>

    <form action="{{ route('admin.events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td><label for="event_name">Event Name:</label></td>
                <td><input type="text" name="event_name" value="{{ $event->event_name }}" required></td>
            </tr>
            <tr>
                <td><label for="description">Description:</label></td>
                <td><textarea name="description">{{ $event->description }}</textarea></td>
            </tr>
            <tr>
                <td><label for="start_time">Start Time:</label></td>
                <td><input type="datetime-local" name="start_time" value="{{ $event->start_time }}" required></td>
            </tr>
            <tr>
                <td><label for="end_time">End Time:</label></td>
                <td><input type="datetime-local" name="end_time" value="{{ $event->end_time }}"></td>
            </tr>
            <tr>
                <td><label for="location">Location:</label></td>
                <td><input type="text" name="location" value="{{ $event->location }}"></td>
            </tr>
            <tr>
                <td><label for="organizer">Organizer:</label></td>
                <td><input type="text" name="organizer" value="{{ $event->organizer }}"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Update Event</button></td>
            </tr>
        </table>
    </form>
@endsection
