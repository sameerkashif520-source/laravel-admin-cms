<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    protected $fillable = [
        'hero_title',
        'hero_image',
        'main_heading',
        'main_description',
        'subheading_1',
        'subheading_1_desc',
        'feature_1_title',
        'feature_1_desc',
        'feature_2_title',
        'feature_2_desc',
        'feature_3_title',
        'feature_3_desc',
        'feature_4_title',
        'feature_4_desc',
        'feature_5_title',
        'feature_5_desc',
        'feature_6_title',
        'feature_6_desc',
        'why_choose_heading',
        'why_choose_point_1',
        'why_choose_point_2',
        'why_choose_point_3',
        'why_choose_point_4',
        'why_choose_point_5',
        'industries_heading',
        'industry_1',
        'industry_2',
        'industry_3',
        'industry_4',
        'trusted_heading',
        'trusted_description',
        'is_active',
    ];
}
