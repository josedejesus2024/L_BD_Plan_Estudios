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
        Schema::create('aafuncionarios', function (Blueprint $table) {
            $table->id();
            $table->string('Nombres', 50);
            $table->string('APaterno', 50);
            $table->string('AMaterno', 50);
            $table->string('email')->unique();
            $table->unsignedBigInteger('id_g');
            $table->foreign('id_g')->references('id')->on('aagrados')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aafuncionarios');
    }
};
 