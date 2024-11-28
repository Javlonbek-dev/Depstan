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
        Schema::create('leaderships', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->string('full_name');
            $table->string('image');
            $table->string('nationality');
            $table->string('partisanship');
            $table->string('phone');
            $table->string('birth_date_place');
            $table->string('info');
            $table->json('work_activities');
            $table->string('family_info');
            $table->string('reception_days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaderships');
    }
};
