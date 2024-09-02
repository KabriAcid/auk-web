<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $table = 'colleges';

    protected $primaryKey = 'college_id';

    protected $fillable = [
        'college_name',
    ];

    // Define the relationship with the Department model
    public function departments()
    {
        return $this->hasMany(Department::class, 'college_id');
    }
}
