<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CtaSection;

class CtaSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CtaSection::create([
            'heading' => "Let's Build Something Great Together",
            'description' => "Partner with our engineering experts for your next project. We deliver innovative solutions with precision, quality, and reliability across all our services.",
            'primary_button_text' => "Start Your Project",
            'secondary_button_text' => "Call Us: (555) 123-4567",
            'email' => "info@engineeringsolutions.com",
            'availability' => "Available Mon-Fri, 8AM-6PM",
            'is_active' => true,
        ]);
    }
}
