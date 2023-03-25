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
        Schema::create('room', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('adults');
            $table->integer('children')->default('0');
            $table->string('description')->nullable();
            $table->date('calendar');
            $table->string('thumbnail')->nullable();
            $table->longText('thumbnailDescription')->nullable();
            $table->bigInteger('price');
            $table->string('bedType');
            $table->integer('area')->nullable();
            $table->integer('nameEn')->nullable();
            $table->integer('status');
            $table->string('roomType');
            $table->string('amount');
            $table->unsignedBigInteger('branch_id');
            // $table->foreignId('branch_id')
            // ->constrained('branch')
            // ->onUpdate('cascade')
            // ->onDelete('cascade')
            // ->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};
