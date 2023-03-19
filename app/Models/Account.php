<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email','api_key','api_secret','phone'
    ];

    protected $hidden = [
        'api_key',
        'api_secret',
    ];
 /*   protected $casts = [
        'email_verified_at' => 'datetime',
    ];  */
}
