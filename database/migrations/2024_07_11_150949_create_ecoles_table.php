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
        Schema::create('ecoles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('identifiant', 11)->unique();
            $table->string('bank1');
            $table->string('account1');
            $table->string('bank2')->nullable();
            $table->string('account2')->nullable();
            $table->string('bank3')->nullable();
            $table->string('account3')->nullable();
            $table->string('bank4')->nullable();
            $table->string('account4')->nullable();
            $table->string('bank5')->nullable();
            $table->string('account5')->nullable();
            $table->string('bank6')->nullable();
            $table->string('account6')->nullable();
            $table->string('telephone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecoles');
    }
};
