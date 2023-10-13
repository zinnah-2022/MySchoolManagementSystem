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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->string('father_name_b');
            $table->string('father_name_e');
            $table->string('mother_name_b');
            $table->string('mother_name_e');
            $table->string('father_nid')->nullable();
            $table->string('mother_nid')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('father_occ')->nullable();
            $table->string('mother_occ')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
