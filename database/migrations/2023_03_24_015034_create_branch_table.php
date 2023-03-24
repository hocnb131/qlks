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
        Schema::create('branch', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_branch');
            $table->string('email');
            $table->string('address');
            $table->integer('phoneNumber');
            $table->longText('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('thumbnailDescription');
            $table->string('slug');
            $table->integer('status');
            $table->string('nameEn');
            $table->unsignedBigInteger('province_id');
            // $table->foreignId('province_id');
            // $table->foreignId('province_id')
            // ->constrained('province')
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
        Schema::dropIfExists('branch');
    }
};
