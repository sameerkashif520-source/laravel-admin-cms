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
        Schema::create('service_sections', function (Blueprint $table) {
            $table->id();
            
            // Hero
            $table->string('hero_title');

            // Services Section
            $table->string('services_label');
            $table->string('services_title');

            // 4 Services
            for ($i = 1; $i <= 4; $i++) {
                $table->string("service_{$i}_name");        // Tab name
                $table->string("service_{$i}_image");      // Image filename
                $table->string("service_{$i}_title");      // Overlay title
                $table->text("service_{$i}_description"); // Overlay description
            }

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_sections');
    }
};
