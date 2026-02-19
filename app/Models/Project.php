<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'hero_title_line1',
        'hero_title_line2',
        'project_1_title',
        'project_1_description',
        'project_1_location',
        'project_1_type',
        'project_1_scope',
        'project_1_image',
        'project_2_title',
        'project_2_description',
        'project_2_location',
        'project_2_type',
        'project_2_scope',
        'project_2_image',
        'project_3_title',
        'project_3_description',
        'project_3_location',
        'project_3_type',
        'project_3_scope',
        'project_3_image',
        'is_active',
    ];
}
