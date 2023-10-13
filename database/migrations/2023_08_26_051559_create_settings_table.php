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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('School Name');
            $table->string('phone')->default('01756987');
            $table->string('address')->default('Dewanganj Janalpur');
            $table->string('est')->default('2587');
            $table->string('code')->default('258');
            $table->string('eiin')->default(258741);
            $table->string('logo')->default('logo.png')->nullable();
            $table->string('email')->default('xiahd@gmail.com');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
