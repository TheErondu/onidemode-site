<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('participants', function (Blueprint $table) {
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('address')->nullable();
            $table->string('proficiency')->nullable();
            $table->boolean('read_write')->default(false);
            $table->json('availability')->nullable();
            $table->date('proposed_date')->nullable();
            $table->text('interest_reason')->nullable();
            $table->text('experience')->nullable();
            $table->text('skills')->nullable();
            $table->text('additional_info')->nullable();
            $table->boolean('recording_consent')->default(false);
            $table->boolean('rules_agreement')->default(false);
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('participants', function (Blueprint $table) {
            //
        });
    }
};
