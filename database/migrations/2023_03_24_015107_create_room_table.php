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
            $table->double('price');
            $table->longText('thumbnail')->nullable();
            $table->string('size');
            $table->string('capacity');
            $table->string('bed');
            $table->longText('services');
            // $table->date('calendar');
            // $table->longText('thumbnailDescription')->nullable();
            // $table->string('bedType');
            // $table->integer('area');
            $table->integer('status')->default(1)->comment('1: còn phòng, 0: hết phòng');
            // $table->string('roomType');
            // $table->string('amount');
            // $table->unsignedBigInteger('branch_id');
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
