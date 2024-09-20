<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $table = 'colleges';

    // Tell Laravel to use 'college_id' as the primary key
    protected $primaryKey = 'college_id';

    // If 'college_id' is not auto-incrementing, you can specify that too
    public $incrementing = true; // Set to 'false' if it isn't auto-incrementing

    // Define the type of the primary key field
    protected $keyType = 'int'; // If it's an integer, otherwise use 'string'

    protected $fillable = [
        'college_name', 'dean_name', 'dean_welcome_message', 'dean_image'
    ];

    public function departments()
    {
        return $this->hasMany(Department::class, 'college_id', 'college_id');
    }
};
