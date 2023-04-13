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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("lastname");
            $table->integer("age");
            $table->string("address");
            $table->string("responsible_name");
            $table->integer("phone_number");
            $table->foreignId("groups_id")
            ->nullable()
            ->constrained("groups")
            ->cascadeOnUpdate();
            $table->foreignId("school_id")
            ->nullable()
            ->constrained("schools")
            ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
