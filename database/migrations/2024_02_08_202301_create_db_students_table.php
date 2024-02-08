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
        Schema::create('db_students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id');
            $table->string('name');
            $table->string('gender');
            $table->string('nisn');
            $table->string('born');
            $table->string('birth');
            $table->string('address');
            $table->string('father');
            $table->string('mother');
            $table->timestamps();
            
            $table->foreign('class_id')->references('id')->on('db_classes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_students');
    }
};
