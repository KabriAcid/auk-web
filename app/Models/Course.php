<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_code', 'title', 'unit'];

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'course_department', 'course_id', 'department_id');
    }
}

