<?php

namespace Database\Seeders;

use App\Models\ServiceSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceSection::create([
            'hero_title' => 'Services',
            'services_label' => 'Our Services',
            'services_title' => 'Reliable, Fast, and Expert Engineering Solutions',

            'service_1_name' => 'Cost Estimation',
            'service_1_image' => 'cost.jpg',
            'service_1_title' => 'Cost Estimation',
            'service_1_description' => 'We offer cost estimation services, providing accurate project budgets and quantity assessments to ensure efficient resource planning and financial management.',

            'service_2_name' => 'Structural Design',
            'service_2_image' => 'design.jpg',
            'service_2_title' => 'Structural Design',
            'service_2_description' => 'We provide structural design services, creating safe, efficient, and code-compliant designs for buildings and infrastructure projects.',

            'service_3_name' => 'Structural Analysis',
            'service_3_image' => 'analysis.jpg',
            'service_3_title' => 'Structural Analysis',
            'service_3_description' => 'We offer structural analysis services, including modeling, load assessment, and design verification to ensure safe and efficient structural performance.',

            'service_4_name' => 'BIM Drawing',
            'service_4_image' => 'BIM-PA.jpg',
            'service_4_title' => 'BIM Drawing',
            'service_4_description' => 'We provide professional BIM services, including modeling, coordination, and clash detection for civil engineering projects, ensuring accurate and constructible designs.',

            'is_active' => true,
        ]);
    }
}
