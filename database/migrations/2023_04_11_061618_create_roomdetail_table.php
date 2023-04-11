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
        Schema::create('roomdetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phoneNumber');
            // $table->double('price');
            // $table->longText('thumbnail')->nullable();
            // $table->longText('description')->nullable();
            // $table->longText('thumbnaildescription')->nullable();
            // $table->string('size');
            // $table->string('capacity');
            // $table->string('bed');
            // $table->longText('services')->nullable();
            $table->integer('status')->default(0)->comment('1: online, 0: offline')->nullable();
            $table->date('ngaydat');
            $table->date('ngaytra');
            $table->unsignedInteger('room_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomdetail');
    }
};
