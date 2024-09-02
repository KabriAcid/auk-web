<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Specify the table name (optional if it follows Laravel's naming convention)
    protected $table = 'students';

    // Specify the primary key (optional if it follows Laravel's naming convention)
    protected $primaryKey = 'student_id';

    // Specify the fields that can be mass assigned
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'level',
        'department_id',
        'course_id',
    ];

    // Define relationships

    // A student belongs to a department
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'department_id');
    }

    // A student belongs to a course
    // public function course()
    // {
    //     return $this->belongsTo(Course::class, 'course_id', 'course_id');
    // }
}
