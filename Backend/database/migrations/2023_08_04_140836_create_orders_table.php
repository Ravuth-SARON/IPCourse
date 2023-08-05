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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('PhoneNumber');
            $table->string("Delivery");
            $table->string("payment");
            $table->decimal('total_amount', 10, 2);
            $table->string('status')->default('pending'); // Order status, e.g., pending, completed, cancelled
            $table->string('shipping_province');
            $table->string('shipping_district');
            $table->string('shipping_commune');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('more_detail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
