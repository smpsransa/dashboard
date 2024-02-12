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
            $table->unsignedBigInteger('class_id')->nullable();
            $table->string('name');
            $table->string('gender');
            $table->string('nisn');
            $table->string('born');
            $table->date('birth')->format('d/m/Y');
            $table->string('nik');
            $table->string('address');
            $table->string('father');
            $table->string('mother');
            $table->timestamps();
            
            $table->foreign('class_id')->references('id')->on('db_classes')->nullOnDelete();
        });

        Schema::table('db_classes', function (Blueprint $table) {
            if (Schema::hasColumn('db_students', 'id')) {
                $table->unsignedBigInteger('captain')->nullable();
                $table->unsignedBigInteger('secretary')->nullable();
                $table->unsignedBigInteger('treasurer')->nullable();

                $table->foreign('captain')->references('id')->on('db_students')->nullOnDelete();
                $table->foreign('secretary')->references('id')->on('db_students')->nullOnDelete();
                $table->foreign('treasurer')->references('id')->on('db_students')->nullOnDelete();

            }
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
