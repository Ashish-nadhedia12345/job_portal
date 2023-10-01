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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('job_category_id')->references('id')->on('job_categories')->cascadeOnDelete();
            $table->string('job_title');
            $table->string('company_address');
            $table->string('role');
            $table->string('description');
            $table->string('qualification');
            $table->string('responsibility');
            $table->integer('min_salary');
            $table->integer('max_salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
