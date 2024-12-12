<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->enum('donation_type', ['Cash', 'Food', 'Clothes']);
            $table->string('donation_address');
            $table->decimal('amount', 10, 2)->nullable();
            $table->enum('food_type', ['Vegetables', 'Can Goods', 'Snacks'])->nullable();
            $table->enum('payment_type', ['Cash', 'Online'])->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
