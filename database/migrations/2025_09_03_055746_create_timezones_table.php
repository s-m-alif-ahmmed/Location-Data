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
        Schema::create('timezones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('gmtOffset')->nullable();
            $table->string('gmtOffsetName')->nullable();
            $table->string('abbreviation')->nullable();
            $table->string('tzName')->nullable();
            $table->enum('status',['Active', 'Deactivate'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timezones');
    }
};
