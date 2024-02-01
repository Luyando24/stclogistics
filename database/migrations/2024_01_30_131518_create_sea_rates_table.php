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
        Schema::create('sea_rates', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('first_cbm')->nullable();
            $table->string('second_cbm')->nullable();
            $table->string('third_cbm')->nullable();
            $table->string('fourth_cbm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sea_rates');
    }
};
