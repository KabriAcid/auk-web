<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'description',
        'start_time',
        'end_time',
        'location',
        'organizer',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    // Method to calculate time remaining until the event starts
    public function timeRemaining()
    {
        $now = Carbon::now();
        $startTime = $this->start_time;

        if ($startTime > $now) {
            return $startTime->diff($now); 
        } elseif ($startTime <= $now && ($this->end_time > $now || $this->end_time === null)) {
            return 'Ongoing';
        } else {
            return 'Finished';
        }
    }
}
