<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CtaSection extends Model
{
    protected $fillable = [
        'heading',
        'description',
        'primary_button_text',
        'secondary_button_text',
        'email',
        'availability',
        'is_active',
    ];
}
