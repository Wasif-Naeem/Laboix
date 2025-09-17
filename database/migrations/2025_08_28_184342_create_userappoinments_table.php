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
        Schema::create('userappoinments', function (Blueprint $table) {
            $table->id();
            $table->string('User_id');
            $table->string('User_name');
            $table->string('User_email');
            $table->string('hospital_id');
            $table->string('hospital_name');
             $table->string('hospital_email');
            $table->string('vaccine_name');
            $table->string('vaccine_id');
            $table->string('parent_email');
            $table->string('child_dob');
            $table->string('child_name');
            $table->string('admin_approval')->default('Not Approved');
            $table->string('hospital_approval')->default('Not Approved');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userappoinments');
    }
};
