<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    // Use this if you set up a separate guard for admins in config/auth.php
    protected $guard = 'admin';

    // Add all fillable fields you expect in your admins table
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    // Hide password and remember_token in arrays or JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // If you want to automatically cast fields, e.g. email_verified_at
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Optional: Accessor to get full name easily
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
