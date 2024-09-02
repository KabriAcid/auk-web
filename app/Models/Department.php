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

    // Define the relationship with the College model
    public function college()
    {
        return $this->belongsTo(College::class, 'college_id');
    }
}
