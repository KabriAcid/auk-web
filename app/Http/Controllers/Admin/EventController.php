<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Display a list of events for admin
    public function index()
    {
        $events = Event::all();
        return view('admin.events.index', compact('events'));
    }

    // Show the form for creating a new event
    public function create()
    {
        return view('admin.events.create');
    }

    // Store a newly created event
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_time' => 'required|date',
            'end_time' => 'nullable|date|after:start_time',
            'location' => 'nullable|string|max:255',
            'organizer' => 'nullable|string|max:255',
        ]);

        Event::create($request->all());
        return redirect()->route('admin.events.index')->with('success', 'Event created successfully.');
    }

    // Show a specific event
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    // Show the form for editing an event
    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    // Update a specific event
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_time' => 'required|date',
            'end_time' => 'nullable|date|after:start_time',
            'location' => 'nullable|string|max:255',
            'organizer' => 'nullable|string|max:255',
        ]);

        $event->update($request->all());
        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully.');
    }

    // Delete an event
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully.');
    }

    // Display a list of events for the public
    public function publicIndex()
    {
        // Fetch and sort events by start time
        $events = Event::orderBy('start_time')->get(); // Sort by start_time
        return view('events.index', compact('events'));
    }
}
