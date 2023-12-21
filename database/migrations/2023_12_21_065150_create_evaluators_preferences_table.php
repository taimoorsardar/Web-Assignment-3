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
        Schema::create('evaluators_preferences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evaluator_id')->unique(); //Foreign key referencing the user table
            $table->string('preferred_category'); 
            $table->string('specialty_areas');

            $table->foreign('evaluator_id')->references('id')->on('evaluators')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluators_preferences');
    }
};
