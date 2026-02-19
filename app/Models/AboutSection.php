<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    protected $fillable = [
        'hero_title',
        'story_label',
        'story_title',
        'story_description_1',
        'story_description_2',
        'story_image',
        'feature_1_title',
        'feature_1_description',
        'feature_2_title',
        'feature_2_description',
        'feature_3_title',
        'feature_3_description',
        'mission_label',
        'mission_title',
        'mission_description',
        'mission_image',
        'value_1_title',
        'value_1_description',
        'value_2_title',
        'value_2_description',
        'value_3_title',
        'value_3_description',
        'value_4_title',
        'value_4_description',
        'difference_label',
        'difference_title',
        'difference_description',
        'card_1_title',
        'card_1_description',
        'card_2_title',
        'card_2_description',
        'card_3_title',
        'card_3_description',
        'card_4_title',
        'card_4_description',
        'card_5_title',
        'card_5_description',
        'card_6_title',
        'card_6_description',
        'is_active',
    ];
}
