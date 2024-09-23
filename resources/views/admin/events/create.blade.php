@extends('layout.admin')

@section('content')
    <h1>Create Event</h1>

    <form action="{{ route('admin.events.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td><label for="event_name">Event Name:</label></td>
                <td><input type="text" name="event_name" placeholder="Event Name" required></td>
            </tr>
            <tr>
                <td><label for="description">Description:</label></td>
                <td><textarea name="description" placeholder="Description"></textarea></td>
            </tr>
            <tr>
                <td><label for="start_time">Start Time:</label></td>
                <td><input type="datetime-local" name="start_time" required></td>
            </tr>
            <tr>
                <td><label for="end_time">End Time:</label></td>
                <td><input type="datetime-local" name="end_time"></td>
            </tr>
            <tr>
                <td><label for="location">Location:</label></td>
                <td><input type="text" name="location" placeholder="Location"></td>
            </tr>
            <tr>
                <td><label for="organizer">Organizer:</label></td>
                <td><input type="text" name="organizer" placeholder="Organizer"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Create Event</button></td>
            </tr>
        </table>
    </form>
@endsection
