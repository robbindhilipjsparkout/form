<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    protected $table = 'user';
    
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'password',
    ];
    
}