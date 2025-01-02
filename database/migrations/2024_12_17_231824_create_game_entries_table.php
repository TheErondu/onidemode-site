<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameEntriesTable extends Migration
{
    public function up()
    {
        Schema::create('game_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('participant_id')->constrained()->onDelete('cascade');
            $table->foreignId('payment_id')->constrained('payments')->onDelete('cascade');
            $table->boolean('has_participated')->default(false); // Default: Not participated
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('game_entries');
    }
}
