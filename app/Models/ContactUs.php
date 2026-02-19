<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = [
        'hero_title',
        'label',
        'heading',
        'description',
        'support_image',
        'info_title_1',
        'info_text_1',
        'info_title_2',
        'info_text_2',
    ];
}
