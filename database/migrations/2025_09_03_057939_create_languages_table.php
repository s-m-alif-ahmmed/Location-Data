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
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->char('code', 2);
            $table->string('name')->nullable();
            $table->string('name_native')->nullable();
            $table->char('dir', 3)->nullable();
            $table->enum('status',['Active', 'Deactivate'])->default('Active');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('languages');
	}
};
