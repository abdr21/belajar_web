<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project_tag', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('project_id')->constrained('projects')->onDelete('cascade'); // Foreign key to projects table
            //$table->foreignId('tag_id')->constrained('tags')->onDelete('cascade'); // Foreign key to tags table
            $table->integer('project_id'); // ID project yang terkait
            $table->integer('tag_id'); // ID tag yang terkait
            //$table->string('tag_name'); // Optional: name of the tag for easier access
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_tag');
    }
};
