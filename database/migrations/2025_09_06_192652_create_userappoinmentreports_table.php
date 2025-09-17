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
        Schema::create('userappoinmentreports', function (Blueprint $table) {
            $table->id();
            $table->string('appoinment_id');
            $table->string('user_id');
            $table->string('hospital_id');
            $table->string('vaccine_id');
            $table->string('user_name');
            $table->string('hospital_name');
            $table->string('hospital_Email');
            $table->string('parent_email');
            $table->string('child_name');
            $table->string('child_dob');
            $table->string('Vaccine_name');
            $table->string('Vaccination_Status');
            $table->date('report_date');
            $table->time('report_time');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userappoinmentreports');
    }
};
