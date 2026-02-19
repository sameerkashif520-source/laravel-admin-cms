<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_sections', function (Blueprint $table) {
            $table->id();

            // Hero
            $table->string('hero_bg_image');
            $table->string('hero_title');
            $table->string('hero_subtitle');
            $table->text('hero_description');
            $table->string('hero_button_text');
            $table->string('hero_engineer_image');

            // Stats
            $table->string('stat_1_number');
            $table->string('stat_1_label');
            $table->string('stat_2_number');
            $table->string('stat_2_label');
            $table->string('stat_3_number');
            $table->string('stat_3_label');

            // Solutions Header
            $table->string('solutions_title');
            $table->text('solutions_subtitle');

            // 6 Cards
            for ($i = 1; $i <= 6; $i++) {
                $table->string("card_{$i}_title");
                $table->text("card_{$i}_description");
            }

            for ($i = 1; $i <= 4; $i++) {
                $table->text("card_{$i}_tools");
            }

            // Process Section
            $table->string('process_title');
            $table->string('process_subtitle');

            for ($i = 1; $i <= 4; $i++) {
                $table->string("step_{$i}_number");
                $table->string("step_{$i}_title");
                $table->text("step_{$i}_description");
            }

            $table->string('learn_more_title')->default('Learn More');
            $table->text('learn_more_subtitle')->default('Discover our proven process and successful project portfolio');
            $table->string('tab_1_title')->default('Our Process');
            $table->string('tab_2_title')->default('Case Studies');

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sections');
    }
};
