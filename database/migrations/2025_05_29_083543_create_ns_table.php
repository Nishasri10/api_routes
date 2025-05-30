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
        Schema::create('ns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reg_no');
            $table->string('name');
            $table->string('department');
            $table->string('bloodgroup');
            $table->string('DOB');
            $table->string('user_name');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ns');
    }
};
