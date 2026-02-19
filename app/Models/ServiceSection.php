<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceSection extends Model
{
    protected $fillable = [
        'hero_title',
        'services_label',
        'services_title',
        'service_1_name',
        'service_1_image',
        'service_1_title',
        'service_1_description',
        'service_2_name',
        'service_2_image',
        'service_2_title',
        'service_2_description',
        'service_3_name',
        'service_3_image',
        'service_3_title',
        'service_3_description',
        'service_4_name',
        'service_4_image',
        'service_4_title',
        'service_4_description',
        'is_active',
    ];
}
