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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('designation_id');
            $table->unsignedBigInteger('subject_id');
            $table->string('name');
            $table->string('mpo_code')->nullable();
            $table->string('appoint_date');
            $table->string('education');
            $table->string('blood');
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
