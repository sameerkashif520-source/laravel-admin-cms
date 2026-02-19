<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSection extends Model
{
    protected $fillable = [
        'label',
        'heading',
        'description',
        'support_image',
        'info_title_1',
        'info_text_1',
        'info_title_2',
        'info_text_2',
        'is_active',
    ];
}
