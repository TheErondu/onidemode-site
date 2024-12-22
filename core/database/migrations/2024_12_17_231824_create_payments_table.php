<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('participant_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 10, 2); // Amount with 2 decimal points
            $table->string('status'); // Payment status: 'success', 'failed', etc.
            $table->timestamps(); // Tracks created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}

