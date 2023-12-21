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
        Schema::create('project_evaluations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evaluator_id'); //Foreign key referencing the user table
            $table->unsignedBigInteger('project_id'); //Foreign key referencing the user table
            $table->integer('rating')->nullable();

            $table->foreign('evaluator_id')->references('id')->on('users')->where('role','evaluator')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_evaluations');
    }
};
