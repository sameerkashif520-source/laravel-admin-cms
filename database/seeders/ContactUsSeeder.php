<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactUs::create([
            'hero_title' => 'Contact us',
            'label' => 'Contact us',
            'heading' => 'Lets Get in Touch',
            'description' => "Share your project details and we\'ll connect you with the right engineering experts",
            'support_image' => 'card2.jpg',
            'info_title_1' => 'Free',
            'info_text_1' => 'No obligation quotes',
            'info_title_2' => '24/7',
            'info_text_2' => 'Submit anytime',
        ]);
    }
}
