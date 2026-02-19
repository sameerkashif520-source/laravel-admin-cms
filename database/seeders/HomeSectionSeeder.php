<?php

namespace Database\Seeders;

use App\Models\HomeSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeSection::create([
            // Hero
            'hero_bg_image' => 'card3.jpg',
            'hero_title' => 'Engineering Excellence',
            'hero_subtitle' => 'Delivered with Precision',
            'hero_description' => 'Complete engineering solutions including estimation, structural design, structural analysis, and BIM drawing services for your projects.',
            'hero_button_text' => 'Get Started',
            'hero_engineer_image' => 'introThumb3_2 2.png',

            // Stats
            'stat_1_number' => '24Hrs',
            'stat_1_label' => 'Quick Turnaround',
            'stat_2_number' => '500+',
            'stat_2_label' => 'Projects Complete',
            'stat_3_number' => '98%',
            'stat_3_label' => 'Accuracy Rate',

            // Solutions Header
            'solutions_title' => 'Comprehensive Engineering Solutions',
            'solutions_subtitle' => 'Construction is the art of building structures from home skyscraper materials',

            // Cards 1-6
            'card_1_title' => 'Cost Estimation',
            'card_1_description' => 'Accurate project cost estimation with detailed breakdowns of materials, labor, and equipment for informed budgeting.',

            'card_2_title' => 'Structural Design',
            'card_2_description' => 'Innovative structural design solutions that balance aesthetics, safety, and cost-effectiveness for all project types.',

            'card_3_title' => 'Structural Analysis',
            'card_3_description' => 'Advanced analysis using industry-leading software to ensure structural integrity and compliance with all codes.',

            'card_4_title' => 'BIM Drawing',
            'card_4_description' => 'Comprehensive Building Information Modeling services for 3D visualization, clash detection, and project coordination.',

            'card_5_title' => 'Quality Assurance',
            'card_5_description' => 'Rigorous quality control processes and compliance with international standards for all engineering deliverables.',

            'card_6_title' => 'Expert Team',
            'card_6_description' => 'Licensed professional engineers with years of experience across residential, commercial, and industrial projects.',

            // Tools
            'card_1_tools' => 'Bluebeam Revu,PlanSwift,RSMeans Data,CostX,Sage Estimating',
            'card_2_tools' => 'ETABS,STAAD.Pro,RAM Structural System,RISA-3D,Tekla Structures',
            'card_3_tools' => 'SAP2000,SAFE,ETABS,ANSYS,ABAQUS,Robot Structural Analysis',
            'card_4_tools' => 'Autodesk Revit,Navisworks,AutoCAD,BIM 360,Tekla Structures',

            // Process
            'process_title' => 'Our Process',
            'process_subtitle' => 'A systematic approach to delivering exceptional engineering solutions',

            // Steps 1-4
            'step_1_number' => '01',
            'step_1_title' => 'Initial Consultation',
            'step_1_description' => 'We discuss your project requirements, goals, and technical specifications to understand your vision.',

            'step_2_number' => '02',
            'step_2_title' => 'Analysis & Planning',
            'step_2_description' => 'Our team conducts thorough analysis, evaluates constraints, and develops a comprehensive project plan.',

            'step_3_number' => '03',
            'step_3_title' => 'Design & Engineering',
            'step_3_description' => 'We create detailed designs, perform structural analysis, and generate accurate estimates and BIM models.',

            'step_4_number' => '04',
            'step_4_title' => 'Delivery & Support',
            'step_4_description' => 'Final deliverables are provided with comprehensive documentation and ongoing technical support.',

            'learn_more_title' => 'Learn More',
            'learn_more_subtitle' => 'Discover our proven process and successful project portfolio',
            'tab_1_title' => 'Our Process',
            'tab_2_title' => 'Case Studies',

            'is_active' => true,
        ]);
    }
}
