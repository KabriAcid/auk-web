<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = 'programs'; // Specify the table name if different

    protected $primaryKey = 'program_id'; // Specify the primary key

    // Add 'program_description' to the fillable properties
    protected $fillable = [
        'program_name', 'department_id', 'program_description'
    ];

    /**
     * Get the department that owns the program.
     */
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'department_id');
    }
}
