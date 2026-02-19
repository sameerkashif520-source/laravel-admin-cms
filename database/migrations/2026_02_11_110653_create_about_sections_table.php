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
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();

            // Hero
            $table->string('hero_title');

            // Our Story
            $table->string('story_label');
            $table->string('story_title');
            $table->text('story_description_1');
            $table->text('story_description_2');
            $table->string('story_image');
            $table->string('feature_1_title');
            $table->text('feature_1_description');
            $table->string('feature_2_title');
            $table->text('feature_2_description');
            $table->string('feature_3_title');
            $table->text('feature_3_description');

            // Mission
            $table->string('mission_label');
            $table->string('mission_title');
            $table->text('mission_description');
            $table->string('mission_image');
            $table->string('value_1_title');
            $table->text('value_1_description');
            $table->string('value_2_title');
            $table->text('value_2_description');
            $table->string('value_3_title');
            $table->text('value_3_description');
            $table->string('value_4_title');
            $table->text('value_4_description');

            // Difference
            $table->string('difference_label');
            $table->string('difference_title');
            $table->text('difference_description');
            $table->string('card_1_title');
            $table->text('card_1_description');
            $table->string('card_2_title');
            $table->text('card_2_description');
            $table->string('card_3_title');
            $table->text('card_3_description');
            $table->string('card_4_title');
            $table->text('card_4_description');
            $table->string('card_5_title');
            $table->text('card_5_description');
            $table->string('card_6_title');
            $table->text('card_6_description');

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
