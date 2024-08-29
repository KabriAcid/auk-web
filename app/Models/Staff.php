<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';

    // Specify the fields that are mass assignable
    protected $fillable = [
        'name',
        'email',
        'phone_number',
    ];
}
