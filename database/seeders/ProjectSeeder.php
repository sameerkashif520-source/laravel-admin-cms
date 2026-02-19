<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            // Hero
            'hero_title_line1' => 'All Project',
            'hero_title_line2' => "That We've Done",

            // Project 1
            'project_1_title' => 'Skyline Heights Residential Complex',
            'project_1_description' => 'Provided complete cost estimation services for a multi-story residential complex, including detailed quantity take-offs, material and labor cost analysis, and BOQ preparation. The project supported accurate budget planning and helped stakeholders control costs during tendering and execution.',
            'project_1_location' => 'Urban High-Rise Development',
            'project_1_type' => 'Residential Construction',
            'project_1_scope' => 'Cost Estimation & BOQ Preparation',
            'project_1_image' => 'sky-heights.jpg',

            // Project 2
            'project_2_title' => 'Horizon Corporate Office Tower',
            'project_2_description' => 'Developed a comprehensive cost plan for a high-rise corporate office tower. Delivered conceptual and detailed cost estimates aligned with design development stages, enabling efficient financial planning and risk management.',
            'project_2_location' => 'Central Business District',
            'project_2_type' => 'Commercial Building',
            'project_2_scope' => 'Project Cost Planning & Budget Control',
            'project_2_image' => 'Corporate-office.jpg',

            // Project 3
            'project_3_title' => 'GreenTech Industrial Manufacturing Facility',
            'project_3_description' => 'Performed detailed cost estimation and value engineering to optimize construction costs without compromising quality or safety standards. Identified cost-saving alternatives in materials and construction methods.',
            'project_3_location' => 'Industrial Zone',
            'project_3_type' => 'Industrial Construction',
            'project_3_scope' => 'Cost Estimation & Value Engineering',
            'project_3_image' => 'industrial.jpg',

            'is_active' => true,
        ]);
    }
}
