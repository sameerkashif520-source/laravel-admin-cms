<?php

namespace Database\Seeders;

use App\Models\ServiceDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceDetail::create([
            // Hero
            'hero_title' => 'Cost Estimation',
            'hero_image' => 'cost.jpg',

            // Main
            'main_heading' => 'Professional Cost Estimation Services for Construction & Engineering Projects',
            'main_description' => 'Accurate cost estimation is critical to the success of any construction or engineering project. We provide professional cost estimation services that deliver precise, data-driven, and market-aligned cost insights to support informed decision-making, risk mitigation, and budget control throughout the project lifecycle. Our expertise ensures that every estimate reflects real-world construction conditions, industry standards, and project-specific requirements.',

            // Subheading
            'subheading_1' => 'Comprehensive Construction Cost Estimation Solutions',
            'subheading_1_desc' => 'We offer end-to-end construction cost estimating services for residential, commercial, industrial, and infrastructure projects. Our solutions are designed to improve cost accuracy, enhance financial planning, and reduce project uncertainties.',

            // 6 Features
            'feature_1_title' => 'Detailed Quantity Take-Off Services',
            'feature_1_desc' => 'We perform accurate quantity take-offs using approved drawings, specifications, and BIM models. Our scope includes materials, labor, equipment, and subcontractor costs, ensuring complete cost visibility.',

            'feature_2_title' => 'Project Cost Planning & Budget Estimation',
            'feature_2_desc' => 'Our project cost planning services help clients establish realistic and achievable budgets during early design and pre-construction phases, minimizing financial risks and unexpected expenses.',

            'feature_3_title' => 'Conceptual & Preliminary Cost Estimates',
            'feature_3_desc' => 'For feasibility studies and early-stage planning, we provide conceptual and preliminary cost estimates that enable stakeholders to evaluate project viability and investment potential.',

            'feature_4_title' => 'Bills of Quantities (BOQ) Preparation',
            'feature_4_desc' => 'We develop clear and structured Bills of Quantities (BOQs) that support tender documentation, contractor bidding, and procurement accuracy.',

            'feature_5_title' => 'Value Engineering & Cost Optimization',
            'feature_5_desc' => 'Our value engineering services focus on identifying cost-saving alternatives without compromising design intent, quality, or performance, maximizing project value.',

            'feature_6_title' => 'Cost Review, Validation & Risk Assessment',
            'feature_6_desc' => 'We review and validate existing cost estimates to identify discrepancies, cost risks, and improvement opportunities, ensuring financial control and transparency.',

            // Why Choose
            'why_choose_heading' => 'Why Choose Our Cost Estimation Services',
            'why_choose_point_1' => 'High-precision cost modeling and analysis',
            'why_choose_point_2' => 'Industry-standard estimation methodologies',
            'why_choose_point_3' => 'Market-driven pricing databases',
            'why_choose_point_4' => 'Clear, auditable, and well-documented reports',
            'why_choose_point_5' => 'Fast turnaround with professional support',

            // Industries
            'industries_heading' => 'Industries We Serve',
            'industry_1' => 'Residential & Commercial Construction',
            'industry_2' => 'Industrial & Manufacturing Facilities',
            'industry_3' => 'Infrastructure & Civil Engineering Projects',
            'industry_4' => 'Renovation, Retrofit & Fit-Out Works',

            // Trusted
            'trusted_heading' => 'Trusted Construction Cost Consultants',
            'trusted_description' => 'We are committed to delivering accurate, reliable, and scalable cost estimation services that support better planning, competitive bidding, and successful project execution. Whether at concept design, pre-construction, or tender stage, our expertise ensures financial clarity and project confidence.',

            'is_active' => true,
        ]);
    }
}
