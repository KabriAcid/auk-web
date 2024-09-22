<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'staff';

    // Specify the primary key
    protected $primaryKey = 'staff_id';

    // Set the primary key as an auto-incrementing integer
    public $incrementing = true;

    // Define the type of the primary key
    protected $keyType = 'int';

    // Enable timestamps (created_at, updated_at)
    public $timestamps = true;

    // Specify which fields are mass-assignable
    protected $fillable = [
        'first_name', 'last_name', 'rank', 'biography', 'image', 'email', 'phone', 'gender', 'status','department_id'
    ];

     // Relationship with the Department model
     public function department()
     {
         return $this->belongsTo(Department::class, 'department_id', 'department_id');
     }
 

    // Method to get staff data for public display
    public function toPublicArray()
    {
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'rank' => $this->rank,
            'biography' => $this->biography,
            'image' => $this->image,
        ];
    }
}
