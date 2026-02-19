<?php

namespace Database\Seeders;

use App\Models\ContactSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactSection::create([
            'label' => "LET'S WORK TOGETHER",
            'heading' => "Start Your Project",
            'description' => "Share your project details and we'll connect you with the right engineering experts",
            'support_image' => 'card2.jpg',
            'info_title_1' => "Free",
            'info_text_1' => "No obligation quotes",
            'info_title_2' => "24/7",
            'info_text_2' => "Submit anytime",
            'is_active' => true,
        ]);
    }
}
