<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $table = 'colleges';

    
    protected $primaryKey = 'college_id';

   
    public $incrementing = true;

  
    protected $keyType = 'int'; 

    protected $fillable = [
        'college_name', 'dean_name', 'dean_welcome_message', 'dean_image'
    ];

    public function departments()
    {
        return $this->hasMany(Department::class, 'college_id', 'college_id');
    }
};
