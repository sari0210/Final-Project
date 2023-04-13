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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("course_id")
            ->nullable()
            ->constrained("courses")
            ->cascadeOnUpdate();
            $table->foreignId("student_id")
            ->nullable()
            ->constrained("students")
            ->cascadeOnUpdate();
            $table->foreignId("teacher_id")
            ->nullable()
            ->constrained("teachers")
            ->cascadeOnUpdate();
            $table->date("inscrip_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
