<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    // Specify the table name if different from the default 'departments'
    protected $table = 'departments'; 

    // Specify the primary key if it's not the default 'id'
    protected $primaryKey = 'department_id';

    // Allow mass assignment of the following fields
    protected $fillable = [
        'department_name', 
        'college_id',
    ];

    // Enable timestamps if you are using the 'created_at' and 'updated_at' columns
    public $timestamps = true;

    /**
     * Get the college that owns the department.
     */
    public function college()
    {
        return $this->belongsTo(College::class, 'college_id', 'college_id');
    }

    /**
     * Get the staff members for the department.
     */
    public function staff()
    {
        return $this->hasMany(Staff::class, 'department_id', 'department_id');
    }

    /**
     * Get the programs for the department.
     */
    public function programs()
    {
        return $this->hasMany(Program::class, 'department_id', 'department_id');
    }
}
