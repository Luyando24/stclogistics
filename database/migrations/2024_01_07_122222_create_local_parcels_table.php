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
        Schema::create('local_parcels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('user_id')->nullable();
            
            $table->string('china_address')->nullable();
            $table->string('trackingNumber')->nullable();
            $table->string('destination_address')->nullable();
            $table->string('local_tracking_no')->nullable();
            $table->string('product_info')->nullable();
            $table->string('qty')->nullable();
            $table->string('product_price')->nullable();

       
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('local_parcels');
    }
};
