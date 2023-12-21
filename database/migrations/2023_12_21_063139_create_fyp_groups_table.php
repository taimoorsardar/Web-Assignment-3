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
        Schema::create('fyp_groups', function (Blueprint $table) {
            $table->id();
            $table->string('group_name');
            $table->string('project_details')->nullable();
            $table->text('keywords')->nullable();
            $table->unsignedBigInteger('admin_id'); //Assuming an admin is associated with each group

            $table->foreign('admin_id')->references('id')->on('users')->where('role','admin')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fyp_groups');
    }
};
