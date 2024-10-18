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
        Schema::create('planstudies', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('slug');
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('official_id');
            $table->foreign('division_id')->references('id')->on('divisions')->onDelete('cascade');
            $table->foreign('official_id')->references('id')->on('officials')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planstudies');
    }
};

