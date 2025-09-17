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
        Schema::create('addvaccines', function (Blueprint $table) {
            $table->id();
            $table->string('hospital_id');
            $table->string('hospital_name');
            $table->string('hospital_email');
            $table->string('vaccine_name');
            $table->string('vaccine_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addvaccines');
    }
};
