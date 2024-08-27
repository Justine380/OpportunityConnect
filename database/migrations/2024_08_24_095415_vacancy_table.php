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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('employment_category');
            $table->string('employment_type');
            $table->string('location');
            $table->timestamps();
        });//
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
