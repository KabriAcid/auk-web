<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'staff';

    // Specify the primary key (assuming 'staff_id' is the primary key in your table)
    protected $primaryKey = 'staff_id';

    // Set the primary key as an auto-incrementing integer
    public $incrementing = true;

    // Define the type of the primary key
    protected $keyType = 'int';

    // Enable timestamps (created_at, updated_at)
    public $timestamps = true;

    // Specify which fields are mass-assignable
    protected $fillable = [
        'first_name', 'last_name', 'rank', 'responsibility', 
        'image', 'email', 'phone', 'biography', 'gender', 
        'department_id', 'status' // Include 'status' field
    ];

    // Relationship with the Department model
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'department_id');
    }
}
