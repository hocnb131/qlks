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
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('phoneNumber');
            $table->longText('description')->nullable();
            $table->longText('thumbnail')->nullable();
            $table->longText('thumbnailDescription')->nullable();
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('province_id')->nullable();
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
