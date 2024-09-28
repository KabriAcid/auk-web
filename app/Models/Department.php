<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    
    protected $table = 'departments'; 

    
    protected $primaryKey = 'department_id';

   
    protected $fillable = [
        'department_name', 
        'college_id',
    ];

  
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
