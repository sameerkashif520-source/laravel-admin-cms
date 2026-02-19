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
        Schema::create('service_details', function (Blueprint $table) {
            $table->id();

            // Hero
            $table->string('hero_title');
            $table->string('hero_image');

            // Main Content
            $table->string('main_heading');
            $table->text('main_description');

            // Subheading
            $table->string('subheading_1');
            $table->text('subheading_1_desc');

            // 6 Features
            $table->string('feature_1_title');
            $table->text('feature_1_desc');
            $table->string('feature_2_title');
            $table->text('feature_2_desc');
            $table->string('feature_3_title');
            $table->text('feature_3_desc');
            $table->string('feature_4_title');
            $table->text('feature_4_desc');
            $table->string('feature_5_title');
            $table->text('feature_5_desc');
            $table->string('feature_6_title');
            $table->text('feature_6_desc');

            // Why Choose
            $table->string('why_choose_heading');
            $table->string('why_choose_point_1');
            $table->string('why_choose_point_2');
            $table->string('why_choose_point_3');
            $table->string('why_choose_point_4');
            $table->string('why_choose_point_5');

            // Industries
            $table->string('industries_heading');
            $table->string('industry_1');
            $table->string('industry_2');
            $table->string('industry_3');
            $table->string('industry_4');

            // Trusted
            $table->string('trusted_heading');
            $table->text('trusted_description');

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_details');
    }
};
