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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();

            $table->string('hero_title')->default('Contact us');
            $table->string('label')->default('Contact us');
            $table->string('heading')->default('Lets Get in Touch');
            $table->text('description')->default('Share your project details and we\'ll connect you with the right engineering experts');
            $table->string('support_image')->nullable();
            $table->string('info_title_1')->default('Free');
            $table->string('info_text_1')->default('No obligation quotes');
            $table->string('info_title_2')->default('24/7');
            $table->string('info_text_2')->default('Submit anytime');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
