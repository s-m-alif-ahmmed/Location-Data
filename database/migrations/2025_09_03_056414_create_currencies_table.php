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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('name_plural')->nullable();
            $table->string('code')->nullable();
            $table->tinyInteger('decimal_digits')->default(2);
            $table->string('symbol')->nullable();
            $table->string('symbol_native')->nullable();
            $table->tinyInteger('symbol_first')->default(1);
            $table->string('decimal_mark', 1)->default('.');
            $table->string('thousands_separator', 1)->default(',');
            $table->tinyInteger('rounding')->default(0);
            $table->enum('status',['Active', 'Deactivate'])->default('Active');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('currencies');
	}
};
