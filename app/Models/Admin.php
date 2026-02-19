<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['email', 'password', 'remember_token'];
    protected $hidden = ['password', 'remember_token'];

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
