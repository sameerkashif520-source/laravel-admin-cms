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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            // Hero
            $table->string('hero_title_line1');
            $table->string('hero_title_line2');

            // Project 1
            $table->string('project_1_title');
            $table->text('project_1_description');
            $table->string('project_1_location');
            $table->string('project_1_type');
            $table->string('project_1_scope');
            $table->string('project_1_image');

            // Project 2
            $table->string('project_2_title');
            $table->text('project_2_description');
            $table->string('project_2_location');
            $table->string('project_2_type');
            $table->string('project_2_scope');
            $table->string('project_2_image');

            // Project 3
            $table->string('project_3_title');
            $table->text('project_3_description');
            $table->string('project_3_location');
            $table->string('project_3_type');
            $table->string('project_3_scope');
            $table->string('project_3_image');

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
