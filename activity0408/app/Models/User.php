<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'student_id', 
        'first_name', 
        'last_name', 
        'email', 
        'password', 
        'course', 
        'year_level', 
        'birthdate', 
        'gender', 
        'phone_number', 
        'address', 
        'emergency_contact'
    ];

    protected $hidden = ['password', 'remember_token'];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}