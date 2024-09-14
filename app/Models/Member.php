<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Member extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'member';

    protected $fillable = [
        'member_name', 'username', 'password', 'phone', 'email', 'urole'
    ];

    protected $hidden = [
        'password',
    ];
}
