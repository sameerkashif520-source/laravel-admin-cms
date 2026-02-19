<?php

namespace Database\Seeders;

use App\Models\AboutSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutSection::create([
            // Hero
            'hero_title' => 'About Us',

            // Story
            'story_label' => 'Our Foundation',
            'story_title' => 'Engineering Excellence Since Day One',
            'story_description_1' => 'With over two decades of industry expertise, we\'ve established ourselves as a trusted partner for complex structural design and engineering challenges. Our commitment to precision, innovation, and safety has earned us recognition across the industry.',
            'story_description_2' => 'We combine cutting-edge technology with time-tested methodologies to deliver solutions that exceed expectations. Every project we undertake reflects our dedication to quality and our deep understanding of structural engineering principles.',
            'story_image' => 'story.jpg',

            // Features
            'feature_1_title' => 'Cost Estimation',
            'feature_1_description' => 'Accurate, detailed cost analysis ensuring optimal budget allocation and financial clarity',
            'feature_2_title' => 'Structural Design',
            'feature_2_description' => 'Innovative design solutions balancing aesthetics, functionality, and structural integrity',
            'feature_3_title' => 'Quality Assurance',
            'feature_3_description' => 'Rigorous testing and validation protocols ensuring every project meets stringent standards',

            // Mission
            'mission_label' => 'Our Vision',
            'mission_title' => 'Precision Meets Innovation',
            'mission_description' => 'Our mission is to transform ambitious engineering visions into robust, sustainable structures. We believe in the power of meticulous planning, advanced analysis, and unwavering attention to detail.',
            'mission_image' => 'story.jpg',

            // Values
            'value_1_title' => 'Precision',
            'value_1_description' => 'Every calculation, measurement, and specification is verified for absolute accuracy',
            'value_2_title' => 'Safety',
            'value_2_description' => 'Safety protocols are embedded into every phase of our engineering process',
            'value_3_title' => 'Innovation',
            'value_3_description' => 'We continuously explore emerging technologies and methodologies to stay ahead',
            'value_4_title' => 'Quality',
            'value_4_description' => 'Excellence is our constant standard across every single deliverable everywhere',

            // Difference
            'difference_label' => 'Our Strength',
            'difference_title' => 'What Sets Us Apart',
            'difference_description' => 'In a competitive industry, we distinguish ourselves through technical expertise, structured workflows, and an unwavering commitment to delivering results that exceed expectations.',

            // Cards
            'card_1_title' => 'Structured Workflow',
            'card_1_description' => 'Our proven methods ensure consistent quality from consultation to delivery and ongoing support.',
            'card_2_title' => 'Advanced Technology',
            'card_2_description' => 'We leverage BIM services, cutting-edge analysis tools, and industry-leading software to solve engineering challenges.',
            'card_3_title' => 'Reliability',
            'card_3_description' => 'Our track record speaks for itself—delivering projects on time, within budget, and with zero compromise on structural integrity.',
            'card_4_title' => 'Expert Team',
            'card_4_description' => 'Our engineers bring deep technical knowledge, certifications, and real-world experience to every assignment.',
            'card_5_title' => 'Analysis & Planning',
            'card_5_description' => 'Comprehensive analysis and meticulous planning form the foundation of every successful project we undertake.',
            'card_6_title' => 'Design & Engineering',
            'card_6_description' => 'From concept to implementation, our design and engineering services transform into innovative, buildable solutions.',

            'is_active' => true,
        ]);
    }
}
