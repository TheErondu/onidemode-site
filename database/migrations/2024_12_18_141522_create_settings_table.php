<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // Unique identifier for the setting
            $table->text('value')->nullable(); // The value of the setting (can be JSON for complex settings)
            $table->string('group')->nullable(); // Grouping settings (e.g., 'global', 'payment', 'seo')
            $table->timestamps(); // Timestamps for auditing changes
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
