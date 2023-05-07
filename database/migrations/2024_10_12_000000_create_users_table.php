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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('names', 45);
            $table->string('lastname', 45);
            $table->string('email')->unique();        
            $table->string('password',45);
            $table->string('date_birth', 45);
            $table->unsignedBigInteger('departaments_id')->nullable();
            $table->foreign('departaments_id')->references('id')->on('departaments')->onDelete('set null');
            $table->unsignedBigInteger('school_id')->nullable();
            $table->foreign('school_id')->references('id')->on('school')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
