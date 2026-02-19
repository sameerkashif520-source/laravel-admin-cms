<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::create([
            'hero_title' => 'Frequently Asked Questions',

            'faq_1_question' => 'What services do you provide?',
            'faq_1_answer' => 'We specialize in cost estimation, structural design, structural analysis, and BIM drawing for residential, commercial, and industrial projects.',

            'faq_2_question' => 'What types of projects do you work on?',
            'faq_2_answer' => 'We work on residential buildings, commercial complexes, industrial facilities, and infrastructure projects, handling both small- and large-scale developments.',

            'faq_3_question' => 'What does your cost estimation service include?',
            'faq_3_answer' => 'Our cost estimation includes material quantities, labor costs, timelines, and budget forecasts, helping clients plan projects accurately and control costs.',

            'faq_4_question' => 'Why is structural design important?',
            'faq_4_answer' => 'Structural design ensures that buildings are safe, stable, and compliant with engineering standards, while optimizing material use and long-term performance.',

            'faq_5_question' => 'What is structural analysis, and why is it needed?',
            'faq_5_answer' => 'Structural analysis evaluates loads, stresses, and safety factors to ensure the structure can withstand environmental and operational conditions.',

            'faq_6_question' => 'What is BIM drawing, and how does it help?',
            'faq_6_answer' => 'BIM drawings provide detailed 3D models, accurate coordination, and clash detection, improving project efficiency and reducing construction errors.',

            'faq_7_question' => 'Do you follow international codes and standards?',
            'faq_7_answer' => 'Yes. All our services comply with local and international engineering codes and standards, ensuring reliability and regulatory approval.',

            'faq_8_question' => 'How fast can you deliver your services?',
            'faq_8_answer' => 'We offer fast turnaround times depending on project scope, while maintaining accuracy and quality.',

            'faq_9_question' => 'Can your services be customized?',
            'faq_9_answer' => 'Absolutely. We deliver customized solutions based on project requirements, budget, and deadlines.',

            'faq_10_question' => 'How can I start working with you?',
            'faq_10_answer' => 'Simply share your project details, and our team will provide a consultation and a clear project roadmap.',

            'is_active' => true,
        ]);
    }
}
