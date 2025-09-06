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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('iso2', 2)->nullable();
            $table->string('iso3',3)->nullable();
            $table->string('name')->nullable();
            $table->string('capital')->nullable();
            $table->string('numeric_code', 5)->nullable();
            $table->string('phone_code', 5)->nullable();
            $table->string('region')->nullable();
            $table->string('subregion')->nullable();
            $table->string('tld')->nullable();
            $table->string('native')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('emoji')->nullable();
            $table->string('emojiU')->nullable();
            $table->enum('status',['Active', 'Deactivate'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
