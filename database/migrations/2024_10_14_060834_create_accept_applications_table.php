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
        Schema::create('accept_applications', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->longText('text');
            $table->string('manager_name');
            $table->string('employ_phone');
            $table->string('reception_name');
            $table->string('reception_phone');
            $table->string('control_name');
            $table->string('control_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accept_applications');
    }
};
