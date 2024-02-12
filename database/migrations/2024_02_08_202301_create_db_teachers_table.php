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
        Schema::create('db_teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('gender');
            $table->string('nip')->unique()->nullable();
            $table->string('born');
            $table->string('birth');
            $table->string('address');
            $table->string('status');
            $table->string('assign');
            $table->timestamps();
        });

        Schema::table('db_classes', function (Blueprint $table) {
            if (Schema::hasColumn('db_teachers', 'id')) {
                $table->unsignedBigInteger('hr_teacher')->nullable();
                $table->foreign('hr_teacher')->references('id')->on('db_teachers')->nullOnDelete();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('db_teachers');
    }
};
